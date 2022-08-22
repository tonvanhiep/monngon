<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienheModel extends Model
{
    use HasFactory;

    private $table = 'lienhe';


    
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


}
