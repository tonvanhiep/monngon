<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuanlylienheController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('admin.quanlylienhe', $this->data);
    }
}
