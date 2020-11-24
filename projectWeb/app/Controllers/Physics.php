<?php

namespace App\Controllers;

class Physics extends BaseController 
{
    public function index(){
        return redirect()->to('/science/physics');
    }
    public function chapter1(){
        return view('Page/Physics/ForceAndMotion');
    }

    public function chapter2(){
        return view('Page/Physics/FundamentalForces');
    }

    public function chapter3(){
        return view('Page/Physics/KeplersLaws');
    }

    public function chapter4(){
        return view('Page/Physics/Energy');
    }

    public function chapter5(){
        return view('Page/Physics/Electricity');
    }
}