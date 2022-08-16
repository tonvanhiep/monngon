<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TintucController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.tintuc', $this->data);
    }
}
