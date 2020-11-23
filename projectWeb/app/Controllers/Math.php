<?php

namespace App\Controllers;

class Math extends BaseController 
{
    public function chapter1(){
        return view('Page/Math/Eksponensial');
    }

    public function chapter2(){
        return view('Page/Math/Logaritma');
    }

    public function chapter3(){
        return view('Page/Math/Polinomial');
    }

    public function chapter4(){
        return view('Page/Math/Diferential');
    }

    public function chapter5(){
        return view('Page/Math/Integral');
    }
}