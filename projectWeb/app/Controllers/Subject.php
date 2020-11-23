<?php

namespace App\Controllers;

use App\Models\M_belajar;
use CodeIgniter\Controller;

class Subject extends Controller
{
    public function index()
    {
        return view('Page/subject_user');
    }
    public function science()
    {
        return view('Page/sciencePage');
    }
    public function social()
    {
        return view('Page/socialPage');
    }
    public function language()
    {
        return view('Page/languagePage');
    }

    public function enrolled($data = [])
    {
        $userdata = new M_belajar();
        $table = 'belajar';
        $id_siswa = session()->get('id');
        $id_mapel = $data['id'];
        $row = $userdata->get_data_belajar($id_siswa, $id_mapel, $table);
        if ($row == null) {
            return false;
        }
        return true;
    }

    public function enroll(){
        $id_siswa = session()->get('id');
        $id_mapel = $this->request->getPost('id_mapel');
        $page = $this->request->getPost('page');

        if ($this->request->getPost('submit') == 'yes'){
        $userdata = new M_belajar();
        $data = array(
            'id_siswa' => $id_siswa,
            'id_mapel' => $id_mapel,
        );

        $userdata->saveBelajar($data);
        }

        return redirect()->to($page);
    }
}
