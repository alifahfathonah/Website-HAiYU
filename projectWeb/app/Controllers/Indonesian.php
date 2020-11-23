<?php

namespace App\Controllers;

class Indonesian extends BaseController
{
    public function chapter1(){
        return view('/Page/Indonesian/Pedoman');
    }

    public function chapter2(){
        return view('/Page/Indonesian/Paragraf');
    }

    public function chapter3(){
        return view('/Page/Indonesian/Cerpen');
    }

    public function chapter4(){
        return view('/Page/Indonesian/PuisidanSajak');
    }

    public function chapter5(){
        return view('/Page/Indonesian/KTI');
    }
}