<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cate=Category::orderBy('id','desc')->paginate(5);
        return view('admin.category.danhsach',compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules=[
            'name'=>'required|unique:categories'
        ];
        $messages=[
            'name.required'=>'chưa nhập tên',
            'name.unique'=>'tên đã được sử dụng',
        ];
        $request->validate($rules,$messages);
        // $request->validate([
        //     'name'=>'required|unique:categories'
        // ]);
        $data=$request->all('name','status');
        Category::create($data);
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Category $Category)
    {
        return view('admin.category.edit',compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $Category)
    {
        $request->validate([
            'name'=>'required|unique:categories',
            'status'=>'required'
        ]);
        $data=$request->all('name','status');
        $Category->update($data);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $Category)
    {
        $Category->delete();
        return redirect()->route('category.index');
    }
}