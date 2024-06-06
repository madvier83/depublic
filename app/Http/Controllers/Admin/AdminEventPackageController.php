<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminEventPackageController extends Controller
{
    public function index($id)
    {
        $event = Event::where('id', $id)->with('packages')->first();
        return view('admin/package', ['event' => $event]);
    }
}
