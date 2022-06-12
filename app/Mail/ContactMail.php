<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.regisdealer')
                    ->subject('New Dealer')
                    ->from('ablelinkweb@yoursite.com','System')
                    ->with('data',$this->data)
                    ->attach($this->data['file1']->getRealPath(),[
                        'as' => $this->data['file1']->getClientOriginalName()])
                    ->attach($this->data['file2']->getRealPath(),[
                        'as' => $this->data['file2']->getClientOriginalName()])
                    ->attach($this->data['file3']->getRealPath(),[
                        'as' => $this->data['file3']->getClientOriginalName()])
                    ->attach($this->data['file4']->getRealPath(),[
                        'as' => $this->data['file4']->getClientOriginalName()]);
    }
}
