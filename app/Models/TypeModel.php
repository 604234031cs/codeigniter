<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeModel extends Model
{
    protected $table = 'type_product';
    protected $allowedFields = ['t_name'];

    public function getType()
    {
        return $this->findAll();
    }
}
