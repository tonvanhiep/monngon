<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangnhapController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.dangnhap', $this->data);
    }
}
