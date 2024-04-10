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
        $datas = \App\Models\Booking::orderBy('created_at', 'desc')->get();
        return view('booking.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = \App\Models\Room::orderBy('created_at', 'desc')->get();
        $menus = \App\Models\Menu::orderBy('created_at', 'desc')->get();
        $categories = \App\Models\Category::orderBy('created_at', 'desc')->get();
        return view('booking.create', compact('rooms', 'menus', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'phone_number' => 'required',
            'room_id' => 'required',
            'booking_category' => 'required',
            'period_time' => 'required',
            'adult' => 'required',
            'kid' => 'required',
            'total_time' => 'required',
            'booking_price' => 'required',
            'booking_status' => 'required',
            'total_amount' => 'required',
        ]);

        $data = $request->except(['booking_status', 'total_amount']);
        $status = \App\Models\BookingDetail::create($data);
        if ($status) {
            $status->rooms()->sync($request->room_id);
            $booking = \App\Models\Booking::create([
                'booking_detail_id' => $status->id,
                'booking_status' => $request->booking_status,
                'total_amount' => $request->total_amount,
            ]);
            if ($booking) {
                return redirect()->route('booking.index')->with('success', 'Đặt phòng thành công!');
            }

        } else {
            return back()->with('error', 'Lỗi đặt phòng!');
        }
//        dd($request->all());
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
        $item = \App\Models\Booking::findOrFail($id);
        $rooms = \App\Models\Room::orderBy('created_at', 'desc')->get();
        $menus = \App\Models\Menu::orderBy('created_at', 'desc')->get();
        $categories = \App\Models\Category::orderBy('created_at', 'desc')->get();
        return view('booking.edit', compact('item', 'rooms', 'menus', 'categories'));
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
