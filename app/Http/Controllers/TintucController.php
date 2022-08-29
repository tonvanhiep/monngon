<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;
use App\Models\TintucModel;
use App\Models\BinhluanModel;

class TintucController extends Controller
{
    //
    public $data = [];
    private $tintuc;
    private $binhluan;
    private $banner;

    public function __construct() {
        $this->tintuc = new TintucModel();
        $this->binhluan = new BinhluanModel();
        $this->banner = new BannerModel();
    }

    public function index() {
        $listtintuc = $this->tintuc->getAll();
        $listbannerimg = $this->banner->getBannerImg('tin_tuc');
        return view('client.tintuc', compact('listtintuc', 'listbannerimg'));
    }

    public function chitiettintuc($slug, $id) {
        $listbinhluan = '';
        $chitiet = $this->tintuc->getBlog($id, $slug);
        $listbannerimg = $this->banner->getBannerImg('tin_tuc');
        $this->data = [
            'chitiet' => $chitiet,
            'listbannerimg' => $listbannerimg
        ];
        return view('client.chitiettintuc', $this->data);
    }
}
