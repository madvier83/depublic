<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('book-ticket');
    }
    public function checkout()
    {
        return view('checkout-ticket');
    }
    public function payment()
    {
        return view('payment-ticket');
    }
    public function paymentComplete()
    {
        return view('payment-ticket-complete');
    }
}
