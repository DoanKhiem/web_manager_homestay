<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Room extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = \App\Models\Room::orderBy('created_at', 'desc')->get();
        return view('room.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categiries = \App\Models\Category::orderBy('created_at', 'desc')->get();
        return view('room.create', compact('categiries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:rooms',
            'category_id' => 'required',
            'area' => 'required',
        ]);
        $data = $request->all();
        $status = \App\Models\Room::create($data);
        if ($status) {
            return redirect()->route('room.index')->with('success', 'Thêm mới phòng thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới phòng');
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
        $item = \App\Models\Room::findOrFail($id);
        $categiries = \App\Models\Category::orderBy('created_at', 'desc')->get();
        return view('room.edit', compact('item', 'categiries'));
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
        $item = \App\Models\Room::findOrFail($id);
        if ($item) {
            $status = $item->delete();
            if ($status) {
                return redirect()->route('room.index')->with('success', 'Xóa phòng thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa phòng!');
            }
        } else {
            return back()->with('error', 'Không tồn tại phòng này!');
        }
    }
}
