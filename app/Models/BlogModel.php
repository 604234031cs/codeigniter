<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $allowedFields = ['p_name', 'p_price', 'p_detail', 'p_img', 't_id'];

    public function getPosts($slug = null)
    {
        if (!$slug) {
            return $this->findAll();
        }
        return $this->asArray()
            ->where(['id' => $slug])
            ->first();
    }
    
}
