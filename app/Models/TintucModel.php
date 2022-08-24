<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TintucModel extends Model
{
    use HasFactory;

    protected $table = 'tintuc';

    public function getAll() {
        $listtintuc = DB::table($this->table)->get();
        return $listtintuc;
    }

    public function getBlog($id) {
        $chitiet = DB::table($this->table)->where('id', '=', $id)->get();
        return $chitiet;
    }
}
