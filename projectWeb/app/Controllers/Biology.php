<?php

namespace App\Controllers;

class Biology extends BaseController 
{
    public function index(){
        return redirect()->to('/science/biology');
    }

    public function chapter1(){
        return view('Page/Biology/BioFoundations');
    }

    public function chapter2(){
        return view('Page/Biology/Cells');
    }

    public function chapter3(){
        return view('Page/Biology/EnergyandTransport');
    }

    public function chapter4(){
        return view('Page/Biology/Reproduction');
    }

    public function chapter5(){
        return view('Page/Biology/Genetics');
    }
}