<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanphamModel extends Model
{
    use HasFactory;

    protected $table = 'monan';

    public function getAll() {
        // $listsp = DB::table($this->table)->get();
        $listsp = DB::select("SELECT mn.id, mn.slug, mn.tenmonan, mn.anhdaidien, MAX(tcm.dongia) gialonnhat, MIN(tcm.dongia) gianhonhat FROM monan mn LEFT JOIN tuychonmon tcm on mn.id = tcm.id_monan WHERE mn.tinhtrang = 1 GROUP BY mn.id, mn.slug, mn.tenmonan, mn.anhdaidien");
        return $listsp;
    }

    public function getProduct($slug, $id) {
        $listsp = DB::table($this->table)->where('id', '=', $id)->where('slug', '=', $slug)->get();
        return $listsp;
    }

    public function timkiem($tenmonan) {
        // $listsp = DB::select('SELECT * FROM monan WHERE tenmonan like "%?%"', [$tenmonan]);
        $listsp = DB::table($this->table)->where('tenmonan','like', $tenmonan)->get();
        return $listsp;
    }
}
