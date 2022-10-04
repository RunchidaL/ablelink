<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectMail;
use Illuminate\Http\Response;
// use RealRashid\SweetAlert\Facades\Alert;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
        // Mail::to('cpe327@gmail.com')->send(new ProjectMail($data));
        // Alert::success('Register Project','Successfully!');
        // return redirect('/dealer/registerproject');

        try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'cpe327@gmail.com';                     //SMTP username
            $mail->Password   = 'kagnouzfpzmgxikh';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('cpe327@gmail.com', 'ADMin');
            $mail->addAddress('cpe327@gmail.com');     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = '$data';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


}