<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TongquanController extends Controller
{
    //
    public $data = [];

    public function index() {
        return view('admin.tongquan', $this->data);
    }
}
