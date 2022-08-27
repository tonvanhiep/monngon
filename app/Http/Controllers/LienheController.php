<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;

class LienheController extends Controller
{
    //
    public $data = [];   
    private $banner;

    public function __construct() {
        $this->banner = new BannerModel();
    }

    public function index() {
        $listbannerimg = $this->banner->getBannerImg('lien_he');
        $this->data = [
            'listbannerimg' => $listbannerimg
        ];
        return view('client.lienhe', $this->data);
    }
}
