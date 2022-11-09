<?php

namespace App\Controllers;

class Vitae extends BaseController
{
    public function home()
    {   
        echo view('header');
        echo view('biodata');
        echo view('footer');
        echo view('about');
        echo view('contact');
        echo view('facts');
        echo view('portofolio');
        echo view('resume');
        echo view('services');
        echo view('skills');
        echo view('testimoni');
    }
}