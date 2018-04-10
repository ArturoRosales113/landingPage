<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;
use Mail;
use App\Ticket;
use App\Mail\TicketRecieved;

class FrontController extends Controller
{
    public function index()
    {
     return view('Frontend.index');
    }

   public function subscribe(Request $request)
   {
    $this->validate($request, [
       'name' => 'required|string|max:255',
       'email' => 'bail|required|string|email|max:255',
       'ticket' => 'required|string|min:6',
       'privacy' => 'required_without_all'
      ]);

      $data= $request->all();
       $ticket = Ticket::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'ticket' => $data['ticket'],
       ]);

       Mail::to($data['email'])->send(new TicketRecieved($ticket));
       return redirect()->route('front.index');



   }
}
