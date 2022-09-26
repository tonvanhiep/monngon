<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use App\Models\DonhangModel;
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

    public function xulydonhang(Request $request) {
        // dd($request);
        $donhang = new DonhangModel();
        $datadh = [
            // 'kh_tendangnhap' => $request->kh_tendangnhap,
            'kh_ten' => $request->kh_ten,
            'kh_diachi' => $request->kh_diachi,
            'kh_dienthoai' => $request->kh_dienthoai,
            'kh_email' => $request->kh_email,
            'kh_ghichu' => $request->kh_ghichu,
            'httt' => $request->httt,
            'id_khuyenmai' => $request->ma_khuyen_mai,
            'chi_tiet_donhang' => $_COOKIE['ct_donhang'],
            'phiship' => $_COOKIE['phi_ship'],
            'tong_tien' => $_COOKIE['tong_tien'],
        ];
        // dd($datadh);
        $id_dh = $donhang->luudonhang($datadh);

        $id_dh = '#' . $id_dh;
        return redirect()->route('camonquykhach')->with('id_dh', $id_dh);;
    }

    public function camonquykhach() {
        if(!session('id_dh'))
            return redirect()->route('trangchu');
        $listbannerimg = $this->banner->getBannerImg('cam_on');
        $this->data = [
            'listbannerimg' => $listbannerimg,
            'id_dh' => session('id_dh')
        ];
        return view('client.camonquykhach', $this->data);
    }
}
