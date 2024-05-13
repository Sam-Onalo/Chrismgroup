<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var string
     */
    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@chrismgroup.com', 'No-Reply Chrismgroup')->subject($this->user['subject'] ?? ($this->user['name'] . ' just dropped a contact mail through ' . config('app.name') . ' website'))->markdown('emails.company.contact-us')->with($this->user);
    }
}
