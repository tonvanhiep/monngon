<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaikhoanModel;

class QuanlytaikhoanController extends Controller
{
    //
    public $data = [];
    private $taikhoan;

    public function __construct() {
        $this->taikhoan = new TaikhoanModel();
    }

    public function index() {
        $listtaikhoan = $this->taikhoan->getAll();
        $this->data = [
            'listtaikhoan' => $listtaikhoan
        ];
        return view('admin.quanlytaikhoan', $this->data);
    }

    public function taotaikhoan() {
        return view('admin.taotaikhoan', $this->data);
    }

    public function chinhsuataikhoan() {
        return view('admin.taotaikhoan', $this->data);
    }

    public function xoataikhoan() {
        return view('admin.taotaikhoan', $this->data);
    }
}
