<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BannerModel extends Model
{
    use HasFactory;

    protected $table = 'banner';

    public function getBannerImg($page) {
        $listbannerimg = DB::select("SELECT ml.anh FROM banner ba join muclucanh ml on ba.id_anh = ml.id WHERE ba.pageweb like ? order by ml.thutu", [$page]);
        return $listbannerimg;
    }
}
