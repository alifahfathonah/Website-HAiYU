<?php

namespace App\Controllers;

class Economics extends BaseController
{
    public function chapter1(){
        return view('/Page/Economics/Introduction');
    }

    public function chapter2(){
        return view('/Page/Economics/Microeconomics');
    }

    public function chapter3(){
        return view('/Page/Economics/Macroeconomics');
    }

    public function chapter4(){
        return view('/Page/Economics/FiscalandMonetary');
    }

    public function chapter5(){
        return view('/Page/Economics/GovandBusiness');
    }
}