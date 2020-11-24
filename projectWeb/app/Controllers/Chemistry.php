<?php

namespace App\Controllers;

class Chemistry extends BaseController 
{
    public function index(){
        return redirect()->to('/science/chemistry');
    }
    public function chapter1(){
        return view('Page/Chemistry/MatterStructure');
    }

    public function chapter2(){
        return view('Page/Chemistry/ChemSys');
    }

    public function chapter3(){
        return view('Page/Chemistry/ChemReact');
    }

    public function chapter4(){
        return view('Page/Chemistry/MatterandEnergy');
    }

    public function chapter5(){
        return view('Page/Chemistry/NuclearChem');
    }
}