<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pro=Product::orderBy('id','desc')->paginate(5);
        return view('admin.product.danhsach',compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules=[
            'name'=>'required|unique:products',
            'image'=>'nullable|image|mimes:jpg,png,gif',
            'image_link'=>'nullable|url',
            'price'=>'required',
            'category_id'=>'required',
        ];
        $messages=[
            'name.required'=>'Chưa nhập tên sản phẩm',
            'name.unique'=>'Tên đã được sử dụng',
            'image.mimes'=>'Định dạng file không phù hợp',
            'image_link.mimes'=>'Định dạng file không phù hợp',
            'price.required'=>'Chưa nhập giá sản phẩm',
            'category_id.required'=>'Chưa nhập category_id',
        ];
        $request->validate($rules,$messages);


        
        $requestData=$request->all();
        if($image = $request->file('image'))
        {
            $destionpath = 'images/';
            $profineimage = date('Ymdhis') . "." . $image->getClientOriginalExtension();
            $image->move($destionpath,$profineimage);
            $requestData['image'] = "$profineimage";
        }elseif($request->has('image_link')){
            $requestData['image_link'] = $request->image_link;
        }
        
        // $data = Product::create($requestData);
        if(Product::create($requestData)){
            return redirect()->route('product.index')->with('success','upload successful');
        }
        return redirect()->back()->with('no','upload failed');
    }



    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $rules=[
            'name'=>'required|unique:products',
        ];
        $messages=[
            'name.required'=>'Chưa nhập tên sản phẩm',
            'name.unique'=>'Tên đã được sử dụng',
            
        ];
        $request->validate($rules,$messages);


        $requestData=$request->all();
        if($image=$request->file('image'))
        {
            $destionpath='images/';
            $profineimage=date('Ymdhis').".".$image->getClientOriginalName();
            $image->move($destionpath,$profineimage);
            $requestData['image']="$profineimage";
        }else
        {
            unset($requestData['image']);
        }

        $data = $product->update($requestData);
        if($data){
            return redirect()->route('product.index')->with('success','update successful');
        }
        return redirect()->back()->with('no','update failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');

    }

   
}