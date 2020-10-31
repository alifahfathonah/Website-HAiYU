<?php

namespace App\Controllers;

class Language extends BaseController
{
    public function index()
    {
        return view('Page/languagePage');
    }

    public function english()
    {
        $data = [
            'title' => 'English',
            'mapel' => 'english',
            'chapter1' => 'Foundatios of English I',
            'chapter2' => 'Foundations of English II',
            'chapter3' => 'English Language and Composition',
            'chapter4' => 'English Literature and Compostion',
            'chapter5' => 'Public Speaking',
        ];
        return view('Page/mapel', $data);
    }

    public function indonesia()
    {
        $data = [
            'title' => 'Bahasa Indonesia',
            'mapel' => 'indonesia',
            'chapter1' => 'Pedoman Bahasa Indonesia',
            'chapter2' => 'Paragraf',
            'chapter3' => 'Cerpen',
            'chapter4' => 'Puisi & Sajak',
            'chapter5' => 'Karya Tulis Ilmiah',
        ];
        return view('Page/mapel', $data);
    }

}