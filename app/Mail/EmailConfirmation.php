<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    private $title;
    private $body;
    private  $sujet;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sujet,$title,$body)
    {
        //
        $this->title = $title;
        $this->body = $body;
        $this->subject = $sujet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject($this->subject)
                    ->markdown('emails.emailConfirmation')
                    ->with([
                            'title' => $this->title,
                            'body' => $this->body
                        ]);
    }
}
