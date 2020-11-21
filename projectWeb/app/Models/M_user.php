<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'email';


    protected $allowedFields = ['email', 'username', 'password'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function saveUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    function get_data_login($email, $username, $table)
    {
        $builder = $this->db->table($table);
        $builder->where('email', $email);
        $log = $builder->get()->getRow();

        if ($log === NULL) {
            $builder = $this->db->table($table);
            $builder->where('username', $username);
            $log = $builder->get()->getRow();
        }

        return $log;
    }
}
