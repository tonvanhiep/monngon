<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanphamModel;
use Illuminate\Support\Facades\DB;

class SanphamController extends Controller
{
    //
    private $sanpham;
    public $data = [];

    public function __construct() {
        $this->sanpham = new SanphamModel();
    }

    public function index() {
        $this->sanpham->getAll();
        $imgbanner = 'assets/images/banner-1.jpg';
        $titlebanner = 'Danh sách sản phẩm';
        $subtitlebanner = 'Nhắc đến Ẩm thực Việt, rất nhiều Đầu bếp nổi tiếng phải trầm trồ vì sự đa dạng, phong phú, nhiều màu sắc. Món ăn Việt Nam với sự hòa quyện giữa lịch sử, văn hóa cùng nét tinh tế, tài tình của người dân Việt đã chinh phục vị giác hàng triệu thực khách trong và ngoài nước, trở thành niềm tự hào của người Việt.';
        $listmonan = $this->sanpham->getAll();
        $listbannerimg = DB::select("SELECT ml.anh FROM banner ba join muclucanh ml on ba.id_anh = ml.id WHERE ba.pageweb like 'mon_an' order by ml.thutu");
        $this->data = [
            'imgbanner' => $imgbanner,
            'titlebanner' => $titlebanner,
            'subtitlebanner' => $subtitlebanner,
            'listmonan' => $listmonan,
            'listbannerimg' => $listbannerimg
        ];
        return view('client.sanpham', $this->data);
    }

    public function chitietmonan($slug, $id) {
        $chitiet = $this->sanpham->getProduct($slug, $id);
        $this->data = [
            'chitiet' => $chitiet
        ];
        return view('client.chitietmonan', $this->data);
    }
}
