<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function home(){
        return view('home.index');
    }

    public function about(){
        return view('home.about');
    }

    public function certification(){
        return view('home.certification');
    }

    public function membership(){
        return view('home.membership');
    }

    public function corporateTrainning(){
        return view('home.corporate-trainning');
    }

    public function partnership(){
        return view('home.partnership');
    }

    public function contact(){
        return view('home.contact');
    }

    public function verification(){
        return view('home.verification');
    }

    public function policies(){
        return view('home.policies');
    }

}
