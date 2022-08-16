<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuanlybaivietController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('admin.quanlybaiviet', $this->data);
    }

    public function chitietbaiviet() {
        return view('admin.taobaiviet', $this->data);
    }

    public function taobaiviet() {
        return view('admin.taobaiviet', $this->data);
    }

    public function chinhsuabaiviet() {
        return view('admin.taobaiviet', $this->data);
    }

    public function xoabaiviet() {
        return view('admin.taobaiviet', $this->data);
    }
}
