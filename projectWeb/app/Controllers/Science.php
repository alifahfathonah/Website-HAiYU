<?php

namespace App\Controllers;
use App\Models\M_materi;

class Science extends Subject
{
    protected $subject = 'science';

    public function index()
    {
        return view('Page/sciencePage');
    }

    public function math()
    {
        $model = new M_materi();
        $id = 1;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Math',
            'mapel' => 'math',
            'chapter1' => $model->get_Materi($id, 1)->judul,
            'chapter2' => $model->get_Materi($id, 2)->judul,
            'chapter3' => $model->get_Materi($id, 3)->judul,
            'chapter4' => $model->get_Materi($id, 4)->judul,
            'chapter5' => $model->get_Materi($id, 5)->judul,
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];

        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_sciencePage', $data);        
    }

    public function physics()
    {
        $id = 2;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Physics',
            'mapel' => 'physics',
            'chapter1' => 'Force and Motion',
            'chapter2' => 'Fundamental Forces',
            'chapter3' => 'Kepler&#39;s Laws',
            'chapter4' => 'Energy',
            'chapter5' => 'Electricity',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_sciencePage', $data); 
    }

    public function chemistry()
    {
        $id = 3;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Chemistry',
            'mapel' => 'chemistry',
            'chapter1' => 'Structure of Matter',
            'chapter2' => 'Chemical Systems',
            'chapter3' => 'Chemical Reactions',
            'chapter4' => 'Matter and Energy',
            'chapter5' => 'Nuclear Chemistry',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_sciencePage', $data); 
    }

    public function biology()
    {
        $id = 4;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Biology',
            'mapel' => 'biology',
            'chapter1' => 'Biology Foundations',
            'chapter2' => 'Cells',
            'chapter3' => 'Energy and Transport',
            'chapter4' => 'Reproduction System',
            'chapter5' => 'Genetics',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_sciencePage', $data); 
    }
}
