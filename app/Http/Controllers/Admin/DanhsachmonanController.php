<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DanhsachmonanController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('admin.danhsachmonan', $this->data);
    }

    public function chitietmonan() {
        return view('admin.themmonan', $this->data);
    }

    public function taomonan() {
        return view('admin.themmonan', $this->data);
    }

    public function chinhsuamonan() {
        return view('admin.themmonan', $this->data);
    }

    public function xoamonan() {
        return view('admin.themmonan', $this->data);
    }
}
