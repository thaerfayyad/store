<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\admin\Category;
use Illuminate\Http\Request;
use DB;

class subCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories =  Category::selection()->where('parent_id', '!=', 0)->get();
        return view('admin.subCategory.home',[
            'categories'=>$categories
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cats =  Category::selection()->where('parent_id', '=', 0)->get();
        return view('admin.subCategory.create',compact('cats'));
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
            'parent_id' => 'required',
            'details' => 'required',

        ]);
        $imageName ="";
        if(  $request->image != Null){
            $image = $request->file('image');
            $imageName =  time()."-".$image->getClientOriginalName();
            $request->image->move('upload/sub/image', $imageName);
        }
        $sub = new Category();
        $sub ->name = $request->name;
        $sub ->parent_id = $request->parent_id;
        $sub->details = $request->details;
        $sub->image =  $imageName;
        $sub ->save();
        return redirect()->back();

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
