<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuanlytaikhoanController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('admin.quanlytaikhoan', $this->data);
    }

    public function taotaikhoan() {
        return view('admin.taotaikhoan', $this->data);
    }

    public function chinhsuataikhoan() {
        return view('admin.taotaikhoan', $this->data);
    }

    public function xoataikhoan() {
        return view('admin.taotaikhoan', $this->data);
    }
}
