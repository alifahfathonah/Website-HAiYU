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
        $data = [
            'subject' => $this->subject,
            'id' => 9,
            'title' => 'English',
            'mapel' => 'english',
            'chapter1' => 'Foundatios of English I',
            'chapter2' => 'Foundations of English II',
            'chapter3' => 'English Language and Composition',
            'chapter4' => 'English Literature and Compostion',
            'chapter5' => 'Public Speaking',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_LanguagePage', $data); 
    }

    public function indonesian()
    {
        $data = [
            'subject' => $this->subject,
            'id' => 10,
            'title' => 'Indonesian',
            'mapel' => 'indonesian',
            'chapter1' => 'Pedoman Bahasa Indonesia',
            'chapter2' => 'Paragraf',
            'chapter3' => 'Cerpen',
            'chapter4' => 'Puisi & Sajak',
            'chapter5' => 'Karya Tulis Ilmiah',
        ];
        $enrolled = $this->enrolled($data);

        if($enrolled){
            return view ('Page/mapel', $data);
        }

        return view ('Page/enroll_LanguagePage', $data);  
    }
}