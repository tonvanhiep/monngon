<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use App\Models\LienheModel;
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

    public function luulienhe(Request $request) {
        // dd($request);
        $datalh = [
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
            'hoten' => $request->name
        ];
        $lienhe = new LienheModel();
        $lienhe->luulienhe($datalh);
        return redirect()->route('lienhe');
    }
}
