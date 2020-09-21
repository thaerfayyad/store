<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\admin\Category;
use Illuminate\Http\Request;
use DB;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        return view('admin.mainCategory.home',[
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
        return view('admin.mainCategory.create');
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
        'details' => 'required',

    ]);
        $imageName ="";
        if(  $request->image != Null){
            $image = $request->file('image');
            $imageName =  time()."-".$image->getClientOriginalName();
            $request->image->move('upload/main/image', $imageName);
        }
        $sub = new Category();
        $sub ->name = $request->name;
        $sub ->parent_id =0;
        $sub->details = $request->details;
        $sub->image =  $imageName;
        $sub ->save();
       return redirect()->back()->with('success','main category added successfully !');

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
