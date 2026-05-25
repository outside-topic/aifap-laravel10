<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\MemberApplicationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    
    public function contactMail(Request $request){

        $attributes = $request->validate([
            "first_name" => ['required'],
            "last_name" => ['nullable'],
            "email" => ['required'],
            "inquiryType" => ['required'],
            "message" => ['required']
        ]);

        try{
            Mail::to('info@aifap.us')->send(new ContactFormMail($attributes));
            return back()->with('success', 'Email Sent Successfully!!!');
        }catch(\Exception $e){
            return back()->with('failed', 'Email send failed!!!');
        }


    }

    public function memberApplicationMail(Request $request){

        $attributes = $request->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "email" => ['required'],
            "contact" => ['required'],
            "memberType" => ['required'],
            "highest_qualification" => ['required'],
            "experience" => ['required']
        ]);

        try{

            Mail::to('info@aifap.us')->send(new MemberApplicationMail($attributes));
            return back()->with('success', 'Email sent successfully!!!');
        }catch(\Exception $e){
            return back()->with('failed', 'Email sent failed!!!');
        }

    }

}
