<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrangchuController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.trangchu', $this->data);
    }
}
