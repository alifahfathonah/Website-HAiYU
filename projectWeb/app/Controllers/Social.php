<?php

namespace App\Controllers;

class Social extends BaseController
{
    public function index()
    {
        return view('Page/socialPage');
    }

    public function economics()
    {
        $data = [
            'title' => 'Economics',
            'mapel' => 'economics',
            'chapter1' => 'Introduction',
            'chapter2' => 'Microeconomics',
            'chapter3' => 'Macroeconomics',
            'chapter4' => 'Fiscal & Monetary Policy',
            'chapter5' => 'Government & Business',
        ];
        return view('Page/mapel', $data);
    }

    public function history()
    {
        $data = [
            'title' => 'History',
            'mapel' => 'history',
            'chapter1' => 'Humans Origins',
            'chapter2' => 'Fall of Roman Empire',
            'chapter3' => 'Art and Culture of World',
            'chapter4' => 'The Great War',
            'chapter5' => 'World War II',
        ];
        return view('Page/mapel', $data);
    }

    public function geography()
    {
        $data = [
            'title' => 'Geography',
            'mapel' => 'geography',
            'chapter1' => 'Introduction',
            'chapter2' => 'Reading Maps',
            'chapter3' => 'Astronomy of the Earth',
            'chapter4' => 'Climatology & Meteorology',
            'chapter5' => 'Landfroms & Geology',
        ];
        return view('Page/mapel', $data);
    }

    public function sociology()
    {
        $data = [
            'title' => 'Math',
            'mapel' => 'math',
            'chapter1' => 'Introduction',
            'chapter2' => 'Social Structure',
            'chapter3' => 'Families in Society',
            'chapter4' => 'Problems in Society',
            'chapter5' => 'Exploring our Society',
        ];
        return view('Page/mapel', $data);
    }
}
