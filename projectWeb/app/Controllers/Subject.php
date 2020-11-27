<?php

namespace App\Controllers;

use App\Models\M_mapel;
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
        $level = session()->get('level');
        if($level == 2){
            return true;
        }

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
        $userdata = new M_belajar();
        $data = array(
            'id_siswa' => $id_siswa,
            'id_mapel' => $id_mapel,
        );

        $userdata->saveBelajar($data);

        return redirect()->to($page);
    }

    public function unenroll(){
        $id_siswa = session()->get('id');
        $id_mapel = $this->request->getPost('id_mapel');
        $subject = $this->request->getPost('subject');
        $userdata = new M_belajar();

        $userdata->deleteBelajar($id_siswa, $id_mapel);
        return redirect()->to($subject);
    }

    public function getPengajar($id_mapel){
        $mapel = new M_mapel;
        $pengajar = $mapel->get_data_pengajar($id_mapel);

        return $pengajar;
    }

    public function isGraded($id_mapel)
    {
        $level = session()->get('level');
        if($level == 2){
            return true;
        }
        $id_siswa = session()->get('id');
        $userdata = new M_belajar();
        $table = 'belajar';
        $row = $userdata->get_data_belajar($id_siswa, $id_mapel, $table);
        if ($row == null) {
            return false;
        }
        if ($row->mid_test == null) {
            return false;
        }
        return true;
    }

    public function getMidTest($id_mapel)
    {
        $level = session()->get('level');
        if($level == 2){
            return true;
        }
        $id_siswa = session()->get('id');
        $userdata = new M_belajar();
        $table = 'belajar';
        $row = $userdata->get_data_belajar($id_siswa, $id_mapel, $table);
        return $row->mid_test;
    }
}
