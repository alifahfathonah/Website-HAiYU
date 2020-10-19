<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'login';
    public function saveUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}
