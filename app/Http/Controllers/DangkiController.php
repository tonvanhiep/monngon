<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangkiController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.dangki', $this->data);
    }
}
