<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('all-event');
    }
    public function show()
    {
        return view('event-details');
    }
    public function showPackage()
    {
        return view('event-package');
    }
    public function showLocation()
    {
        return view('event-location');
    }
    public function showUpcoming()
    {
        return view('event-upcoming');
    }
}
