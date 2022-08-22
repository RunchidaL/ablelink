<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class InfodealerRequestController extends Controller
{

    public function sendEmail(Request $request){
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $data=[
            'name'=>$request->name,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'province'=>$request->province,
            'district'=>$request->district,
            'subdistrict'=>$request->subdistrict,
            'companythai'=>$request->companythai,
            'companyeng'=>$request->companyeng,
            'vatid'=>$request->vatid,
            'idcompany'=>$request->idcompany,
            'file1'=>$request->file('file1'),
            'file2'=>$request->file('file2'),
            'file3'=>$request->file('file3'),
            'file4'=>$request->file('file4')
        ];
        Mail::to('cpe327@gmail.com')->send(new ContactMail($data));
        return 'Thanks for reaching out!';
    }
    
}
