<?php

namespace App\Controllers;

class Science extends Subject
{
    private $subject = 'science';

    public function index()
    {
        return view('Page/sciencePage');
    }

    public function math()
    {
        $id = 1;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Math',
            'mapel' => 'math',
            'chapter1' => 'Eksponensial',
            'chapter2' => 'Logaritma',
            'chapter3' => 'Polinominal',
            'chapter4' => 'Diferential',
            'chapter5' => 'Integral',
            'nama_pengajar' => $pengajar->nama_pengajar,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];

        $enrolled = $this->enrolled($data);

        if ($enrolled) {
            return view('Page/mapel', $data);
        }

        return view('Page/enroll_sciencePage', $data);
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
            'nama_pengajar' => $pengajar->nama_pengajar,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if ($enrolled) {
            return view('Page/mapel', $data);
        }

        return view('Page/enroll_sciencePage', $data);
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
            'nama_pengajar' => $pengajar->nama_pengajar,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if ($enrolled) {
            return view('Page/mapel', $data);
        }

        return view('Page/enroll_sciencePage', $data);
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
            'nama_pengajar' => $pengajar->nama_pengajar,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if ($enrolled) {
            return view('Page/mapel', $data);
        }

        return view('Page/enroll_sciencePage', $data);
    }
}
