<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    //public $message;

    public function __construct($name, $email, $subject)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        // $this->message = $message;
    }

    public function build()
    {
        return $this->view('email.contactmail')
            ->from($this->email, $this->name)
            ->subject($this->subject);
        //->with(['message' => $this->message]);
    }
}
