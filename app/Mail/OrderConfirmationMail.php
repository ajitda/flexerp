<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $customer;
    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer, $order)
    {
        $this->customer = $customer;
        $this->order   = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.OrderConfirmed', compact('customer', 'order'));
    }
}
