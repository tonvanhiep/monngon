<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanphamModel extends Model
{
    use HasFactory;

    private $table = 'monan';

    public function getAll() {
        $listsp = DB::table($this->table)->get();
        return $listsp;
    }
}
