<?php

namespace App\Http\Controllers;

use App\Models\TaikhoanModel;
use Illuminate\Http\Request;

class DangkiController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.dangki', $this->data);
    }

    public function xulydangky(Request $request) {
        // dd($request);

        // $datatk = [
        //     'username' => $request->username,
        //     'password' => $request->password,
        //     'email' => $request->email,
        //     'phone' => $request->phone
        // ];
        // $taikhoan = new TaikhoanModel();
        // $taikhoan->taotaikhoan($datatk);
        return 'ĐANG XỬ LÝ...';
    }
}
