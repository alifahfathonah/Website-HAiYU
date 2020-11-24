<?php

namespace App\Controllers;

class English extends BaseController
{
    public function index(){
        return redirect()->to('/language/english');
    }
    public function chapter1(){
        return view('/Page/English/Foundations1');
    }

    public function chapter2(){
        return view('/Page/English/Foundations2');
    }

    public function chapter3(){
        return view('/Page/English/EngLanguage');
    }

    public function chapter4(){
        return view('/Page/English/EngLiterature');
    }

    public function chapter5(){
        return view('/Page/English/PublicSpeaking');
    }
}