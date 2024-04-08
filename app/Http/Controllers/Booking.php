<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Booking extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('booking.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = \App\Models\Room::orderBy('created_at', 'desc')->get();
        $menus = \App\Models\Menu::orderBy('created_at', 'desc')->get();
        return view('booking.create', compact('rooms', 'menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
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
