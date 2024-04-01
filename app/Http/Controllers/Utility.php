<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Utility extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = \App\Models\Utility::orderBy('created_at', 'desc')->get();
        return view('utility.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('utility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'string|nullable',
        ]);
        $data = $request->all();
        $status = \App\Models\Utility::create($data);
        if ($status) {
            return redirect()->route('utility.index')->with('success', 'Thêm mới tiện ích thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới tiện ích');
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
        $item = \App\Models\Utility::findOrFail($id);

        if ($item) {
            if ($item->numberOfCategory->count()) {
                return back()->with('error', 'Đang có loại phòng thuộc tiện ích này này!');
            }
            $status = $item->delete();
            if ($status) {
                return redirect()->route('utility.index')->with('success', 'Xóa tiện ích thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa tiện ích!');
            }
        } else {
            return back()->with('error', 'Không tồn tại tiện ích này!');
        }
    }
}
