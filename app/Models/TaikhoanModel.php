<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TaikhoanModel extends Model
{
    use HasFactory;

    protected $table = 'taikhoan';

    public function getAll() {
        $list = DB::table($this->table)->get();
        return $list;
    }

    public function kiemtrataikhoan($email, $password) {
        $ketqua = DB::table($this->table)->where('email', '=', $email)->where('matkhau', '=', $password)->get();
        return $ketqua;
    }

    public function getRoleAccount($email, $password) {
        $check = $this->kiemtrataikhoan($email, $password);
        if(isset($check[0])) {
            if($check[0]->admin == 1)
                return 'admin';
            else return 'client';
        }
        return 'chuadangnhap';
    }

    public function taotaikhoan($data) {
        DB::table($this->table)->insert([
            [
                'hoten' => $data['username'],
                'email' => $data['email'],
                'sodienthoai' => $data['phone'],
                'matkhau' => md5($data['password']),
                'ngaytao' => date("y:m:d H:i:s"),
                'ngaycapnhat' => date("y:m:d H:i:s"),
                'admin' => 0
            ]
        ]);
    }

    public function taotaikhoanadmin($data) {
        DB::table($this->table)->insert([
            [
                'hoten' => $data['username'],
                'email' => $data['email'],
                'sodienthoai' => $data['phone'],
                'matkhau' => md5($data['password']),
                'ngaytao' => date("y:m:d H:i:s"),
                'ngaycapnhat' => date("y:m:d H:i:s"),
                'admin' => 1
            ]
        ]);
    }
}
