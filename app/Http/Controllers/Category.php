<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $utilities = \App\Models\Utility::orderBy('created_at', 'desc')->get();
        return view('category.create', compact('utilities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories',
            'utility_id' => 'required',
            'first_block' => 'required',
            'first_block_price' => 'required',
            'next_hour_price' => 'required',
            'daily_price' => 'required',
            'weekend_surcharge' => 'required',
            'holiday_surcharge' => 'required',
            'early_checkin' => 'required',
            'late_checkout' => 'required',
        ]);
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
