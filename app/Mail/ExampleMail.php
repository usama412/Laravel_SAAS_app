<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExampleMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $vin;
    public $report_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $vin, $report_id)
    {
        $this->name = $name;
        $this->email = $email;
        $this->vin = $vin;
        $this->report_id = $report_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.example')
                    ->subject('Your Report Details')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'vin' => $this->vin,
                        'report_id' => $this->report_id,
                    ]);
    }
}
