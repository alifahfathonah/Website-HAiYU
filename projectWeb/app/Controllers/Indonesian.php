<?php

namespace App\Controllers;

use App\Models\M_materi;

class Indonesian extends Language
{
    private $course = 'Indonesian';
    private $mapel = 'indonesian';
    private $id = 10;
    
    public function index(){
        return redirect()->to('/language/indonesian');
    }
    public function chapter1(){
        $model = new M_materi();
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 1',
            'materi' => (string)$model->getMateri(46)->judul,
            'isi' => (string)$model->getMateri(46)->konten,
            'next' => '/'.$this->mapel.'/chapter2',
        ];
        return view('Page/Content',$data);
    }

    public function chapter2(){
        $model = new M_materi();
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 2',
            'materi' => (string)$model->getMateri(47)->judul,
            'isi' => (string)$model->getMateri(47)->konten,
            'next' => '/'.$this->mapel.'/chapter3',
        ];
        return view('Page/Content',$data);
    }

    public function chapter3(){
        $model = new M_materi();
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 3',
            'materi' => (string)$model->getMateri(48)->judul,
            'isi' => (string)$model->getMateri(48)->konten,
            'next' => '/'.$this->mapel.'/chapter4',
        ];
        return view('Page/Content',$data);
    }

    public function chapter4(){
        $model = new M_materi();
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 4',
            'materi' => (string)$model->getMateri(49)->judul,
            'isi' => (string)$model->getMateri(49)->konten,
            'next' => '/'.$this->mapel.'/chapter5',
        ];
        return view('Page/Content',$data);
    }

    public function chapter5(){
        $model = new M_materi();
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 5',
            'materi' => (string)$model->getMateri(50)->judul,
            'isi' => (string)$model->getMateri(50)->konten,
            'next' => '/'.$this->mapel.'/midtest',
        ];
        return view('Page/Content',$data);
    }

    public function midTest(){
        $score = $this->getMidTest($this->id);

        $data=[
            'title' => $this->course,
            'mapel' => $this->mapel,
            'id' => $this->id,
            'score' => $score,
        ];

        $graded = $this->isGraded($this->id);

        if($graded){
            return view('Page/midTest_score', $data);
        }

        return view('Page/midTest', $data);
    }
}