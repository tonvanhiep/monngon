<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;

class TimkiemController extends Controller
{
    //
    public $data = [];
    private $banner;

    public function __construct() {
        $this->banner = new BannerModel();
    }

    public function index() {
        $listbannerimg = $this->banner->getBannerImg('tim_kiem');
        $this->data = [
            'listbannerimg' => $listbannerimg
        ];
        return view('client.timkiem', $this->data);
    }
}
