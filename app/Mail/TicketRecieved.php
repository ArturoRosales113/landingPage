<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Ticket;

class TicketRecieved extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket)
    {
        $this->ticket=$ticket;//
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('postmaster@ilveneziano.com.mx')
                    ->subject('Ticket Registrado')
                    ->markdown('emails.tickets.arrived')
                    ->with([
                     'ticket' => $this->ticket->ticket,
                     'name' => $this->ticket->name,
                    ]);
    }
}
