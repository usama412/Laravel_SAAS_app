<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $plan_name;
    public $amount;
    public $confirmation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $plan_name, $amount, $confirmation)
    {
        $this->name = $name;
        $this->plan_name = $plan_name;
        $this->amount = $amount;
        $this->confirmation = $confirmation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.payment_success')
                    ->subject('Payment Success Confirmation')
                    ->with([
                        'name' => $this->name,
                        'plan_name' => $this->plan_name,
                        'amount' => $this->amount,
                        'confirmation' => $this->confirmation,
                    ]);
    }
}
