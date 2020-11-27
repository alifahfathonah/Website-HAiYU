<?php

namespace App\Controllers;

class Social extends Subject
{
    private $subject = 'social';

    public function index()
    {
        return view('Page/socialPage');
    }

    public function economics()
    {
        $id = 5;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Economics',
            'mapel' => 'economics',
            'chapter1' => 'Introduction',
            'chapter2' => 'Microeconomics',
            'chapter3' => 'Macroeconomics',
            'chapter4' => 'Fiscal & Monetary Policy',
            'chapter5' => 'Government & Business',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_socialPage', $data); 
    }

    public function history()
    {
        $id = 6;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'History',
            'mapel' => 'history',
            'chapter1' => 'Humans Origins',
            'chapter2' => 'Fall of Roman Empire',
            'chapter3' => 'Art and Culture of World',
            'chapter4' => 'The Great War',
            'chapter5' => 'World War II',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_socialPage', $data); 
    }

    public function geography()
    {
        $id = 7;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Geography',
            'mapel' => 'geography',
            'chapter1' => 'Introduction',
            'chapter2' => 'Reading Maps',
            'chapter3' => 'Astronomy of the Earth',
            'chapter4' => 'Climatology & Meteorology',
            'chapter5' => 'Landfroms & Geology',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_socialPage', $data); 
    }

    public function sociology()
    {
        $id = 8;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Sociology',
            'mapel' => 'sociology',
            'chapter1' => 'Introduction',
            'chapter2' => 'Social Structure',
            'chapter3' => 'Families in Society',
            'chapter4' => 'Problems in Society',
            'chapter5' => 'Exploring our Society',
            'nama_pengajar' => $pengajar->nama,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_socialPage', $data); 
    }
}
