<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = DB::table('events')->latest()->paginate(10);
        return view('admin/event', ['events' => $events]);
    }
    public function create()
    {
        return view('admin/event-create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'location' => 'required',
                'date' => 'required',
                'description' => 'required',
                'highlight' => 'required',
            ],
        );

        Event::create($validated);

        return redirect('/admin/events');
    }

    public function edit($id)
    {
        $event = Event::where('id', $id)->first();
        return view('admin/event-edit', ['event' => $event]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'description' => 'required',
            'highlight' => 'required',
        ]);

        DB::table('events')->where('id', $id)->update($validated);

        return redirect('/admin/events');
    }

    public function delete($id)
    {
        DB::table('events')->where('id', $id)->delete();
        return redirect('/admin/events');
    }
}
