<?php

namespace App\Models;

use CodeIgniter\Model;

class M_mapel extends Model
{
    protected $table = 'mapel';

    protected $allowedFields = ['id', 'nama', 'id_pengajar', 'final_test'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    function get_data_pengajar($id_mapel)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id_mapel);
        
        $id_pengajar = $builder->get()->getRow()->id_pengajar;
        
        $builder = $this->db->table('pengajar');
        $builder->where('id', $id_pengajar);
        $log = $builder->get()->getRow();

        return $log;
    }

    function get_mapel($id_pengajar)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_pengajar', $id_pengajar);
        
        $id_mapel = $builder->get()->getRow()->id;
        
        $builder = $this->db->table('mapel');
        $builder->where('id', $id_mapel);
        $log = $builder->get()->getRow();

        return $log;
    }
}