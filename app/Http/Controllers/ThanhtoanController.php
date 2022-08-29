<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;

class ThanhtoanController extends Controller
{
    //
    public $data = [];
    private $banner;

    public function __construct() {
        $this->banner = new BannerModel();
    }

    public function index() {
        $listbannerimg = $this->banner->getBannerImg('thanh_toan');
        $this->data = [
            'listbannerimg' => $listbannerimg
        ];
        return view('client.thanhtoan', $this->data);
    }
}
