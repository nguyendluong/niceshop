<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mess_name;
    public $link;
    public function __construct($mess_name,$link)
    {
        $this->mess_name = $mess_name;
        $this->link  = $link;
    }

    public function build()
    {
        return $this->subject('NICE feedback')->view('client.contact.mess_mail',[
            'link'      => $this->link,
            'mess_name' => $this->mess_name,
        ]);

    }

}
