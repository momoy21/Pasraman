<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity = Activity::all();
        $recentActivities = Activity::recent()->get();

        return view('dashboard', ['activity'=>$activity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'event' => 'required|string|max:255',
            'tanggalevent' => 'required|date',
            'deskripsi' => [
                'required',
                'string',
                'max:375',
            ],
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        $path = $request->file('foto')->storePublicly('photos', 'public');

        $activity = new Activity();
        $activity->event = $request->event;
        $activity->tanggalevent = $request->tanggalevent;
        $activity->deskripsi = $request->deskripsi;
        $activity->foto = $path;
        $activity->save();

        // KEMUNGKINAN DIGANTI
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //$activity = Activity::findOrFail($id);

        //return view('dashboard.show', ['activity' => $activity]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::find($id);
        return view('dashboard.edit', ['activity' => $activity]);
    }

   /*public function search(Request $request)
    {
        //
        $title = "Search Results";
        $query = $request->input('q');
        $activity = Activity::where('title', 'like', "%$query%")->get();
        return view('acitivity.search', compact('event', 'deskripsi', 'query'));
    }
    */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'event' => 'required|string|max:255',
            'tanggalevent' => 'required|date',
            'deskripsi' => [
                'required',
                'string',
                'max:375',
            ],
            //'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $activity = Activity::findOrfail($id);
        $activity->event = $request->event;
        $activity->deskripsi = $request->deskripsi;
        $activity->save();

        return redirect ('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * KEMUNGKINAN DIGANTI BERGANTUNG SAMA DASHBOARDNYA
     */
    public function destroy(string $id)
    {
        $activity = Activity::find($id);
        $activity->delete();

        return redirect('/dashboard');
    }
}
