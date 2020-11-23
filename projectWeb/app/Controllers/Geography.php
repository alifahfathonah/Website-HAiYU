<?php

namespace App\Controllers;

class Geography extends BaseController
{
    public function chapter1(){
        return view('/Page/Geography/Introduction');
    }

    public function chapter2(){
        return view('/Page/Geography/Maps');
    }

    public function chapter3(){
        return view('/Page/Geography/Astronomy');
    }

    public function chapter4(){
        return view('/Page/Geography/ClimatologyandMeteorology');
    }

    public function chapter5(){
        return view('/Page/Geography/LandformsandGeology');
    }
}