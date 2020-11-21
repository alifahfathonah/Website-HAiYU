<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('Page/User_homepage');
    }
    public function signin()
    {
        return view('Page/signin');
    }
    public function about()
    {
        return view('Page/about');
    }
    public function subject()
    {
        return view('Page/subject_user');
    }
    public function science()
    {
        return view('Page/sciencePage');
    }
    public function social()
    {
        return view('Page/socialPage');
    }
    public function language()
    {
        return view('Page/LanguagePage');
    }
    public function dashboard()
    {
        return view('Page/Homepage');
    }
}
