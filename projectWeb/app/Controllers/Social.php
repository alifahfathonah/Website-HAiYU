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
        $data = [
            'subject' => $this->subject,
            'id' => 5,
            'title' => 'Economics',
            'mapel' => 'economics',
            'chapter1' => 'Introduction',
            'chapter2' => 'Microeconomics',
            'chapter3' => 'Macroeconomics',
            'chapter4' => 'Fiscal & Monetary Policy',
            'chapter5' => 'Government & Business',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_socialPage', $data); 
    }

    public function history()
    {
        $data = [
            'subject' => $this->subject,
            'id' => 6,
            'title' => 'History',
            'mapel' => 'history',
            'chapter1' => 'Humans Origins',
            'chapter2' => 'Fall of Roman Empire',
            'chapter3' => 'Art and Culture of World',
            'chapter4' => 'The Great War',
            'chapter5' => 'World War II',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_socialPage', $data); 
    }

    public function geography()
    {
        $data = [
            'subject' => $this->subject,
            'id' => 7,
            'title' => 'Geography',
            'mapel' => 'geography',
            'chapter1' => 'Introduction',
            'chapter2' => 'Reading Maps',
            'chapter3' => 'Astronomy of the Earth',
            'chapter4' => 'Climatology & Meteorology',
            'chapter5' => 'Landfroms & Geology',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_socialPage', $data); 
    }

    public function sociology()
    {
        $data = [
            'subject' => $this->subject,
            'id' => 8,
            'title' => 'Sociology',
            'mapel' => 'sociology',
            'chapter1' => 'Introduction',
            'chapter2' => 'Social Structure',
            'chapter3' => 'Families in Society',
            'chapter4' => 'Problems in Society',
            'chapter5' => 'Exploring our Society',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_socialPage', $data); 
    }
}
