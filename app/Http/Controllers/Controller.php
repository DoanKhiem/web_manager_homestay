<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard()
    {
        $totalAmount = \App\Models\Booking::where('booking_status', 3)->sum('total_amount');
        $rooms = \App\Models\Room::orderBy('created_at', 'desc')->get();
        $menus = \App\Models\Menu::orderBy('created_at', 'desc')->get();
        $utilities = \App\Models\Utility::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('rooms', 'menus', 'utilities', 'totalAmount'));
    }
}
