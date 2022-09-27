<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use RealRashid\SweetAlert\Facades\Alert;

class InfodealerRequestController extends Controller
{
    public function sendEmail(Request $req){

        $req->validate([
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'province' => 'required',
            'district' => 'required',
            'subdistrict' => 'required',
            'companythai' => 'required',
            'companyeng' => 'required',
            'vatid' => 'required',
            'idcompany' => 'required',
            'file1' => 'required',
            'file2' => 'required',
            'file3' => 'required',
        ]);

        if($req->file('file4')){
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
        }
        else
        {
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
                'file3'=>$req->file('file3')
            ];
        }
        // dd($data);
        Mail::to('cpe327@gmail.com')->send(new ContactMail($data));
        Alert::success('Register Dealer','Successfully!');
        return redirect('/');
    }
    
}