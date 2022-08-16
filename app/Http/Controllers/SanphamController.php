<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanphamController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.sanpham', $this->data);
    }
}
