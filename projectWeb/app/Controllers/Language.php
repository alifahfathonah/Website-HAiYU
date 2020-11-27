<?php

namespace App\Controllers;

class Language extends Subject
{
    private $subject = 'language';

    public function index()
    {
        return view('Page/LanguagePage');
    }

    public function english()
    {
        $id = 9;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'English',
            'mapel' => 'english',
            'chapter1' => 'FOE I',
            'chapter2' => 'FOE II',
            'chapter3' => 'English Language',
            'chapter4' => 'English Literature',
            'chapter5' => 'Public Speaking',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_LanguagePage', $data); 
    }

    public function indonesian()
    {
        $id = 10;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Indonesian',
            'mapel' => 'indonesian',
            'chapter1' => 'Pedoman Bahasa Indonesia',
            'chapter2' => 'Paragraf',
            'chapter3' => 'Cerpen',
            'chapter4' => 'Puisi & Sajak',
            'chapter5' => 'Karya Tulis Ilmiah',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_LanguagePage', $data);  
    }
}