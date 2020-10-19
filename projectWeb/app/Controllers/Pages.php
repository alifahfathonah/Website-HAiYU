<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('Page/Homepage');
    }
    public function signup()
    {
        return view('Page/signup');
    }
    public function signin()
    {
        return view('Page/signin');
    }

    //--------------------------------------------------------------------

}
