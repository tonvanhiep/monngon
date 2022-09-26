<?php

namespace App\Http\Controllers;

use App\Models\TaikhoanModel;
use Illuminate\Http\Request;

class TaikhoanController extends Controller
{
    public $data = [];
    private $taikhoan;

    public function __construct() {
        $this->taikhoan = new TaikhoanModel();
    }

    public function viewdangnhap() {
        return view('client.dangnhap', $this->data);
    }

    public function viewdangky() {
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
        // $this->taikhoan->taotaikhoan($datatk);
        return 'ĐANG XỬ LÝ...';
    }

    public function xulydangnhap(Request $request) {
        $role =  $this->taikhoan->getRoleAccount($request->email, $request->password);
        if ($role == 'admin') {
            session()->put('loaitaikhoan', 'admin');
            return redirect()->route('trangchu');
        }
        else if($role == 'client') {
            session()->put('loaitaikhoan', 'client');
            return redirect()->route('trangchu');
        }
        
    }

    public function dangxuat(Request $request) {
        $request->session()->forget('loaitaikhoan');
        $request->session()->forget('id');
        return redirect()->route('trangchu');
    }
}