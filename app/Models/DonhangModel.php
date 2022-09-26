<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DonhangModel extends Model
{
    use HasFactory;

    protected $table = 'donhang';



    public function getAll() {

    }



    public function setStatus($id, $status = 0) {

    }

    public function setNote($id, $note = '') {
        
    }

    public function luudonhang($datadh) {
        $daytime = date("Y:m:d H:i:s");

        DB::table($this->table)->insert([
            [
                'tongtien' => $datadh['tong_tien'],
                'phivanchuyen' => $datadh['phiship'],
                // 'id_khuyenmai' => $datadh['id_khuyenmai'],
                'ngaytao' => $daytime,
                'ngaycapnhat' => $daytime,
                'trangthai' => 'Đang xử lý',
                'ghichu' => $datadh['kh_ghichu'],
                'hoten' => $datadh['kh_ten'],
                'email' => $datadh['kh_email'],
                'sodienthoai' => $datadh['kh_dienthoai'],
                'diachi' => $datadh['kh_diachi']
            ]
        ]);

        $iddhvt = DB::table($this->table)->select('id')
                    ->where('tongtien', '=', $datadh['tong_tien'])
                    ->where('phivanchuyen', '=', $datadh['phiship'])
                    // ->where('id_khuyenmai', '=', $datadh['id_khuyenmai'])
                    ->where('ngaytao', '=', $daytime)
                    ->where('ngaycapnhat', '=', $daytime)
                    ->where('trangthai', 'like', 'Đang xử lý')
                    ->where('ghichu', '=', $datadh['kh_ghichu'])
                    ->where('hoten', '=', $datadh['kh_ten'])
                    ->where('email', '=', $datadh['kh_email'])
                    ->where('sodienthoai', '=', $datadh['kh_dienthoai'])
                    ->where('diachi', '=', $datadh['kh_diachi'])
                ->get();

        $ctdh = explode('/', $datadh['chi_tiet_donhang']);
        for ($i = 0; $i < count($ctdh) - 1; $i++){
            $ctdh[$i] = explode('.', $ctdh[$i]);
            //{sp_id}.{sp_tc}.{sp_sl}.{sp_gia}.{sp_tongtien}
            DB::table('chitietdonhang')->insert([
                [
                    'id_donhang' => $iddhvt[0]->id,
                    'id_monan' => $ctdh[$i][0],
                    'id_tuychon' => $ctdh[$i][1],
                    'soluong' => $ctdh[$i][2],
                    'dongia' => $ctdh[$i][3],
                    'tongtien' => $ctdh[$i][4]
                ]
            ]);
        }

        return $iddhvt[0]->id;
    }
}
