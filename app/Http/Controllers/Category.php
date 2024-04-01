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
        $datas = \App\Models\Category::orderBy('created_at', 'desc')->get();
        return view('category.index', compact('datas'));
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
        $data = $request->all();
        $status = \App\Models\Category::create($data);
        if ($status) {
            return redirect()->route('category.index')->with('success', 'Thêm mới loại phòng thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới loại phòng');
        }
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
        $item = \App\Models\Category::findOrFail($id);
        if ($item) {
            if ($item->numberOfRooms->count()) {
                return back()->with('error', 'Đang có phòng thuộc loại phòng này!');
            }
            $status = $item->delete();
            if ($status) {
                return redirect()->route('category.index')->with('success', 'Xóa loại phòng thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa loại phòng!');
            }
        } else {
            return back()->with('error', 'Không tồn tại loại phòng này!');
        }
    }
}
