<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LienheController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('client.lienhe', $this->data);
    }
}
