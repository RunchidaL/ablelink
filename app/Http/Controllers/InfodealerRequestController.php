<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class InfodealerRequestController extends Controller
{
    public function sendEmail(Request $req){
        $data=[
            'name'=>$req->name,
            'lname'=>$req->lname,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'province'=>$req->province,
            'district'=>$req->district,
            'subdistrict'=>$req->subdistrict,
            'companythai'=>$req->companythai,
            'companyeng'=>$req->companyeng,
            'vatid'=>$req->vatid,
            'idcompany'=>$req->idcompany,
            'file1'=>$req->file('file1'),
            'file2'=>$req->file('file2'),
            'file3'=>$req->file('file3'),
            'file4'=>$req->file('file4')
        ];
        Mail::to('cpe327@gmail.com')->send(new ContactMail($data));
        return 'Thanks for reaching out!';
    }
    
}
