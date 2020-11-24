<?php

namespace App\Controllers;

class History extends BaseController
{
    public function index(){
        return redirect()->to('/social/history');
    }
    public function chapter1(){
        return view('/Page/History/HumansOrigins');
    }

    public function chapter2(){
        return view('/Page/History/FallofRoman');
    }

    public function chapter3(){
        return view('/Page/History/ArtandCulture');
    }

    public function chapter4(){
        return view('/Page/History/GreatWar');
    }

    public function chapter5(){
        return view('/Page/History/WW2');
    }
}