<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectMail;

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

        // $validated = $req->validate([
        //     'Dealercompanyname' => 'required',
        //     'ProjectManager' => 'required',
        //     'EmailProjectManager' => 'required',
        //     'TelProjectManager' => 'required',
        //     'ProjectOwner' => 'required',
        //     'ProjectName' => 'required',
        //     'projectstatus' => 'required',
        //     'Installationschedule' => 'required',
        //     'listproducts' => 'required',
        //     'Purchasingstyle' => 'required'
        // ]);
        // dd($validated);
        
        
        
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
        Mail::to('cpe327@gmail.com')->send(new ProjectMail($data));
        return redirect('/');
    }


}


