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

    // public function policies(){
    //     return view('home.policies');
    // }

    public function privacyPolicy(){
        return view('home.privacy-policy');
    }

    public function complaintAppeals(){
        return view('home.complaints-appeals');
    }

    public function faq(){
        return view('home.faq');
    }

    public function codeEthics(){
        return view('home.code-ethics');
    }

    public function refundPolicy(){
        return view('home.refund-policy');
    }

    public function termsCondition(){
        return view('home.terms-condition');
    }

}
