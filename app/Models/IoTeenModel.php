<?php

namespace App\Models;

use CodeIgniter\Model;

class IoTeenModel extends Model
{
    protected $table = 'ioteen';

    public function getDevice($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}