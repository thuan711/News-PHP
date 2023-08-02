<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GuiEmail extends Mailable
{
    use Queueable, SerializesModels;

    // public $hoten = "";
    // public $email = "";
    // public $noidung = "";
    // public function __construct($ht,$em,$nd)
    // {
    //     $this->hoten = $ht;
    //     $this->email = $em;
    //     $this->noidung = $nd;
    // }

    public function build(){
        return $this
        -> from("postmaster@sandbox98a276c0c5034546b116293030455ece.mailgun.org","Aha Mag")
        -> to("hothuan6677@gmail.com")
        ->subject(("Thu cảm ơn"))
        ->view('guimail');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail liên hệ từ khách hàng',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'guimail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
