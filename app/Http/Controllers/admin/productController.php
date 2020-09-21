<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\admin\Category;
use App\models\admin\Product;
use Illuminate\Http\Request;
use DB;

class  productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Product::all();
        return view('admin.product.home',[
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cats =  Category::selection()->where('parent_id', '!=', 0)->get();
        return view('admin.product.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'category_id' => 'required',
            'details' => 'required',

        ]);
        $imageName ="";
        if(  $request->image != Null){
            $image = $request->file('image');
            $imageName =  time()."-".$image->getClientOriginalName();
            $request->image->move('upload/products/image', $imageName);
        }
        $one = new Product();
        $one ->name = $request->name;
        $one ->slug = $request->name;
        $one->details = $request->details;
        $one->photo =  $imageName;
        $one->category_id =$request->category_id;
        $one ->save();
        return redirect()->back()->with('success','product created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
