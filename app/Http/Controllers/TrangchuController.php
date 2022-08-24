<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SanphamModel;
use App\Models\TintucModel;

class TrangchuController extends Controller
{
    //
    private $data = [];
    private $monan;
    private $tintuc;

    public function __construct() {
        $this->monan = new SanphamModel();
        $this->tintuc = new TintucModel();
    }

    public function index() {
        $listmonan = $this->monan->getAll();
        $listtintuc = $this->tintuc->getAll();
        //dd($listmonan);

        return view('client.trangchu', compact('listmonan', 'listtintuc'));
    }
}
