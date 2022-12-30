<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectMail;
use Illuminate\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectDealerController extends Controller
{
    public function sendEmail(Request $req){

        $req->validate([
            'Dealercompanyname' => 'required',
            'ProjectManager' => 'required',
            'EmailProjectManager' => 'required|email',
            'TelProjectManager' => 'required',
            'ProjectOwner' => 'required',
            'ProjectName' => 'required',
            'projectstatus' => 'required',
            'Installationschedule' => 'required',
            'listproducts' => 'required',
            'Purchasingstyle' => 'required'
        ]);
        
        $data=[
            'Dealercompanyname' => $req->Dealercompanyname,
            'ProjectManager' => $req->ProjectManager,
            'EmailProjectManager' => $req->EmailProjectManager,
            'TelProjectManager' => $req->TelProjectManager,
            'ProjectOwner' => $req->ProjectOwner,
            'ProjectName' => $req->ProjectName,
            'projectstatus' => $req->projectstatus,
            'Installationschedule' => $req->Installationschedule,
            'listproducts' => $req->listproducts,
            'Purchasingstyle' => $req->Purchasingstyle
            
        ];
        Mail::to('test@ablelink.co.th')->send(new ProjectMail($data));
        session()->flash('message','Register Project Successfully!');
        Alert::success('ลงทะเบียนโปรเจ็ค','สำเร็จ!');
        return redirect('/dealer/registerproject');
    }


}