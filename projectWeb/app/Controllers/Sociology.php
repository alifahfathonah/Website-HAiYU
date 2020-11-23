<?php

namespace App\Controllers;

class Sociology extends BaseController
{
    public function chapter1(){
        return view('/Page/Sociology/Introduction');
    }

    public function chapter2(){
        return view('/Page/Sociology/SocialStructure');
    }

    public function chapter3(){
        return view('/Page/Sociology/Families');
    }

    public function chapter4(){
        return view('/Page/Sociology/Problems');
    }

    public function chapter5(){
        return view('/Page/Sociology/Exploring');
    }
}