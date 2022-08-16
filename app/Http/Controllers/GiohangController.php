<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiohangController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.giohang', $this->data);
    }
}
