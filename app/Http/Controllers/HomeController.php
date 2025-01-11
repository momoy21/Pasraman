<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get al of the lists of activities
        $recentActivities = Activity::recent()->get();
        return view('pasraman.homepage', ['recentActivities' => $recentActivities]);
    }

    public function history()
    {
        return view('pasraman.history');
    }

    public function activity()
    {
        //
        $activity = Activity::all();
        return view('pasraman.activity', ['activity' => $activity]);
    }

    public function contact()
    {
        return view('pasraman.contact');
    }

    public function program()
    {
        return view('pasraman.program');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
