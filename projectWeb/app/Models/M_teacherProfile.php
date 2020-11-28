<?php

namespace App\Models;

use CodeIgniter\Model;

class M_teacherProfile extends Model
{
    protected $table = 'pengajar';
    protected $primaryKey = 'id';


    protected $allowedFields = ['email', 'username', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'telepon', 'foto'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getTeacher($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['username' => $username]);
        }
    }
    public function updateTeacher($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
}
