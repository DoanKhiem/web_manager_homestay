<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'hourly_price' => 'required',
            'daily_price' => 'required',
            'description' => 'nullable',
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
        $item = \App\Models\Category::findOrFail($id);
        $utilities = \App\Models\Utility::orderBy('created_at', 'desc')->get();
        return view('category.edit', compact(['item', 'utilities']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = \App\Models\Category::findOrFail($id);
        if ($item) {
            $this->validate($request, [
                'name' => ['required', Rule::unique('categories')->ignore($item->id)],
                'utility_id' => 'required',
                'hourly_price' => 'required',
                'daily_price' => 'required',
                'description' => 'nullable',
            ]);
            $data = $request->all();
            $status = $item->fill($data)->save();
            if ($status) {
                return redirect()->route('category.index')->with('success', 'Sửa loại phòng thành công');
            } else {
                return back()->with('error', 'Lỗi sửa loại phòng');
            }
        } else {
            return back()->with('error', 'Không tồn tại loại phòng này!');
        }
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
