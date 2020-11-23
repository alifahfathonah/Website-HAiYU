<?php

namespace App\Controllers;

class Science extends Subject
{
    public function index()
    {
        return view('Page/sciencePage');
    }

    public function math()
    {
        $data = [
            'id' => 1,
            'title' => 'Math',
            'mapel' => 'math',
            'chapter1' => 'Eksponensial',
            'chapter2' => 'Logaritma',
            'chapter3' => 'Polinominal',
            'chapter4' => 'Diferential',
            'chapter5' => 'Integral',
        ];

        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_sciencePage', $data);        
    }

    public function physics()
    {
        $data = [
            'id' => 2,
            'title' => 'Physics',
            'mapel' => 'physics',
            'chapter1' => 'Force and Motion',
            'chapter2' => 'Fundamental Forces',
            'chapter3' => 'Kepler&#39;s Laws',
            'chapter4' => 'Energy',
            'chapter5' => 'Electricity',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_sciencePage', $data); 
    }

    public function chemistry()
    {
        $data = [
            'id' => 3,
            'title' => 'Chemistry',
            'mapel' => 'chemistry',
            'chapter1' => 'Structure of Matter',
            'chapter2' => 'Chemical Systems',
            'chapter3' => 'Chemical Reactions',
            'chapter4' => 'Matter and Energy',
            'chapter5' => 'Nuclear Chemistry',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_sciencePage', $data); 
    }

    public function biology()
    {
        $data = [
            'id' => 4,
            'title' => 'Biology',
            'mapel' => 'biology',
            'chapter1' => 'Biology Foundations',
            'chapter2' => 'Cells',
            'chapter3' => 'Energy and Transport',
            'chapter4' => 'Reproduction System',
            'chapter5' => 'Genetics',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_sciencePage', $data); 
    }
}
