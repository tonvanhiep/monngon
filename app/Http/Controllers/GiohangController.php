<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;

class GiohangController extends Controller
{
    //
    public $data = [];
    private $banner;

    public function __construct() {
        $this->banner = new BannerModel();
    }

    public function index() {
        $listbannerimg = $this->banner->getBannerImg('gio_hang');
        $this->data = [
            'listbannerimg' => $listbannerimg
        ];
        return view('client.giohang', $this->data);
    }
}
