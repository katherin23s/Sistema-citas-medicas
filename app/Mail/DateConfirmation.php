<?php

namespace App\Mail;

use App\Classes\Confirmation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DateConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $confirmation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Confirmation $confirmation)
    {
        $this->confirmation = $confirmation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.DateConfirmation', [
            'confirmation' => $this->confirmation,
        ]);
    }
}