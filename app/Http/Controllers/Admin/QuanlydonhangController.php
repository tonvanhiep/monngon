<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuanlydonhangController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('admin.quanlydonhang', $this->data);
    }

    public function chitietdonhang() {
        return view('admin.quanlydonhang', $this->data);
    }

    public function chinhsuadonhang() {
        return view('admin.quanlydonhang', $this->data);
    }
}
