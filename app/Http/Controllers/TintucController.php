<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TintucModel;
use App\Models\BinhluanModel;

class TintucController extends Controller
{
    //
    public $data = [];
    private $tintuc;
    private $binhluan;

    public function __construct() {
        $this->tintuc = new TintucModel();
        $this->binhluan = new BinhluanModel();
    }

    public function index() {
        $listtintuc = $this->tintuc->getAll();
        return view('client.tintuc', compact('listtintuc'));
    }

    public function chitiettintuc($slug, $id) {
        $listbinhluan = '';
        $chitiet = $this->tintuc->getBlog($id);
        $this->data = [
            'chitiet' => $chitiet,
            'listbinhluan' => $listbinhluan
        ];
        return view('client.chitiettintuc', $this->data);
    }
}
