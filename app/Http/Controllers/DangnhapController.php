<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaikhoanModel;

class DangnhapController extends Controller
{
    //
    public $data = [];
    private $taikhoan;

    public function __construct() {
        $this->taikhoan = new TaikhoanModel();
    }

    public function index() {
        return view('client.dangnhap', $this->data);
    }

    public function dangnhap(Request $request) {
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
