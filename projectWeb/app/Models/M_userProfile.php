<?php

namespace App\Models;

use CodeIgniter\Model;

class M_userProfile extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';


    protected $allowedFields = ['email', 'username', 'nama', 'jenis_kelamin', 'tanggal_lahir'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getUser($email = false)
    {
        if ($email == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['email' => $email]);
        }
    }
    public function updateUser($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
}
