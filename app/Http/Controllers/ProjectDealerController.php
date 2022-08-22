<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectMail;
use Illuminate\Http\Response;

class ProjectDealerController extends Controller
{
    public function sendEmail(Request $req){

        $req->validate([
            'Dealercompanyname' => 'required',
            'ProjectManager' => 'required',
            'EmailProjectManager' => 'required',
            'TelProjectManager' => 'required',
            'ProjectOwner' => 'required',
            'ProjectName' => 'required',
            'projectstatus' => 'required',
            'Installationschedule' => 'required',
            'listproducts' => 'required',
            'Purchasingstyle' => 'required'
        ]);
        
        $data=[
            'Dealercompanyname' => $request->Dealercompanyname,
            'ProjectManager' => $request->ProjectManager,
            'EmailProjectManager' => $request->EmailProjectManager,
            'TelProjectManager' => $request->TelProjectManager,
            'ProjectOwner' => $request->ProjectOwner,
            'ProjectName' => $request->ProjectName,
            'projectstatus' => $request->projectstatus,
            'Installationschedule' => $request->Installationschedule,
            'listproducts' => $request->listproducts,
            'Purchasingstyle' => $request->Purchasingstyle
            
        ];
        Mail::to('cpe327@gmail.com')->send(new ProjectMail($data));
        return redirect('/');
    }


}


