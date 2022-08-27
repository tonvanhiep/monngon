<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;
use App\Models\SanphamModel;
use App\Models\TintucModel;

class TrangchuController extends Controller
{
    //
    private $data = [];
    private $monan;
    private $tintuc;
    private $banner;

    public function __construct() {
        $this->monan = new SanphamModel();
        $this->tintuc = new TintucModel();
        $this->banner = new BannerModel();
    }

    public function index() {
        $listmonan = $this->monan->getAll();
        $listtintuc = $this->tintuc->getAll();
        //dd($listmonan);
        $listbannerimg = $this->banner->getBannerImg('trang_chu');

        return view('client.trangchu', compact('listmonan', 'listtintuc', 'listbannerimg'));
    }
}
