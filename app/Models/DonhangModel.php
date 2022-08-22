<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonhangModel extends Model
{
    use HasFactory;

    private $table = 'donhang';



    public function getAll() {

    }



    public function setStatus($id, $status = 0) {

    }

    public function setNote($id, $note = '') {
        
    }
}
