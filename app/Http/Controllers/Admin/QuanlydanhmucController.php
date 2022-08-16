<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuanlydanhmucController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('admin.quanlydanhmuc', $this->data);
    }

    public function taodanhmuc() {
        return view('admin.quanlydanhmuc', $this->data);
    }

    public function chinhsuadanhmuc() {
        return view('admin.quanlydanhmuc', $this->data);
    }

    public function xoadanhmuc() {
        return view('admin.quanlydanhmuc', $this->data);
    }
}
