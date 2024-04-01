<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = \App\Models\Menu::orderBy('created_at', 'desc')->get();
        return view('menu.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $data = $request->all();
        $status = \App\Models\Menu::create($data);
        if ($status) {
            return redirect()->route('menu.index')->with('success', 'Thêm mới menu thành công');
        } else {
            return back()->with('error', 'Lỗi thêm mới menu');
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
        $item = \App\Models\Menu::findOrFail($id);
        if ($item) {
            $status = $item->delete();
            if ($status) {
                return redirect()->route('menu.index')->with('success', 'Xóa menu thành công!');
            } else {
                return back()->with('error', 'Lỗi xóa menu!');
            }
        } else {
            return back()->with('error', 'Không tồn tại menu này!');
        }
    }
}
