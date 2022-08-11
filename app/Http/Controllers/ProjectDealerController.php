<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectMail;

class ProjectDealerController extends Controller
{
    public function sendEmail(Request $req){
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
        Mail::to('ablelink@mail.com')->send(new ProjectMail($data));
        return 'Thanks for reaching out';
    }
}
