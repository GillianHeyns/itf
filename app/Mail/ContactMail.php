<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->from('info@weareitfactory.be', 'IT Factory - Info')
//            ->cc('info@weareitfactory.be', 'IT Factory - Info')
//            ->subject('IT Factory - Contact Form')
//            ->markdown('email.contact');
        return $this->from('info@weareitfactory.be', 'IT Factory - Info')
            ->cc('gillian_heyns@hotmail.com', 'IT Factory - Info')
            ->subject('IT Factory - Contact Form')
            ->markdown('email.contact');
    }
}
