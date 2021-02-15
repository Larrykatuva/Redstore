<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User_shop;
use App\Models\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('shop.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'desc' => 'required',
            'logo_image' => 'nullable|max:4999|image'
        ]); 

        //handle file upload
        if($request->hasFile('logo_image')){
            $fileNameWithExt = $request->file('logo_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo_image')->storeAs('public/storage/logo_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $shop = new User_shop;
        $shop->user_id = auth()->user()->id;
        $shop->name = $request->input('name');
        $shop->location = $request->input('location');
        $shop->desc = $request->input('desc');
        $shop->logo = $fileNameToStore;

        $shop->save();

        return redirect('/profile')->with('success', 'Profile completed');
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

    public function catalog(){
        $user = auth()->user();
        $catalog = Product::all();//$user->userShop->catalog;
        return Datatables::of($catalog)
            ->addColumn('action', function($catalog){
                return '<a onclick="showData('.$catalog->id.')" class="btn btn-sm btn-success">Show</a>'.' '. 
                        '<a onclick="editForm('.$catalog->id.')" class="btn btn-sm btn-info">Edit</a>'.' '. 
                        '<a onclick="deleteData('.$catalog->id.')" class="btn btn-sm btn-danger">Delete</a>';
            })->make(true);

    }

    public function shop(){
        return view('shop.show');
    }

}
