<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimkiemController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.timkiem', $this->data);
    }
}
