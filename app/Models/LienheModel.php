<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LienheModel extends Model
{
    use HasFactory;

    protected $table = 'lienhe';


    
    public function __construct() {
        
    }

    public function getAll() {

    }

    public function getSearch($search) {

    }



    public function setStatus($id, $status = 0) {

    }

    public function setNote($id, $note='') {

    }

    public function luulienhe($data){
        DB::table($this->table)->insert([
            [
                'email' => $data['email'],
                'sodienthoai' => $data['phone'],
                'noidung' => $data['content'],
                'hoten' => $data['hoten'],
                'ngaytao' => date("y:m:d H:i:s")
            ]
        ]);
    }
}
