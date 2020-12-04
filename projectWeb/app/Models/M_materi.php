<?php

namespace App\Models;

use CodeIgniter\Model;

class M_materi extends Model
{
    protected $table = 'materi';

    protected $allowedFields = ['id', 'judul', 'konten', 'id_mapel'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    function getMateri($id_materi){
        $builder = $this->db->table($this->table);
        $builder->where('id', $id_materi);
        
        $log = $builder->get()->getRow();

        return $log;
    }

    function updateMateri($data, $id){
        $query = $this->db->table($this->table)->update($data, ['id' => $id]);
        return $query;
    }

    function saveMateri($data){    
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function deleteMateri($id, $id_mapel)
    {
        $query = $this->db->table($this->table)->delete(['id' => $id, 'id_mapel' => $id_mapel]);
        return $query;
    }
}