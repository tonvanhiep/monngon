<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TaikhoanModel extends Model
{
    use HasFactory;

    protected $table = 'taikhoan';

    public function getAll() {
        $list = DB::table($this->table)->get();
        return $list;
    }
}
