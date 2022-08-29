<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use App\Models\SanphamModel;
use Illuminate\Http\Request;

class TimkiemController extends Controller
{
    //
    public $data = [];
    private $banner;
    private $monan;

    public function __construct() {
        $this->banner = new BannerModel();
        $this->monan = new SanphamModel();
    }

    public function index(Request $request) {
        $listmonan = $this->monan->timkiem($request->keyword);
        $listbannerimg = $this->banner->getBannerImg('tim_kiem');
        $this->data = [
            'keyword' => $request->keyword,
            'listbannerimg' => $listbannerimg,
            'listmonan' => $listmonan
        ];
        return view('client.timkiem', $this->data);
    }
}
