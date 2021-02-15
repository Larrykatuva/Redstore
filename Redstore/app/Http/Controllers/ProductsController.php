<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = array(
            'Computing' => 'Computing',
            'Fashion' => 'Fashion',
            'Electronics' => 'Electronics',
            'Phones & Tablets' => 'Phones & Tablets',
            'Property' => 'Property',
            'Home funture & Appliances' => 'Home funture & appliances',
            'Sport & Fitness' => 'Sport & Fitness',
            'Other' => 'Other Categories'
        );
        return view('product.create')->with('category', $category);
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
            'price' => 'required',
            'quantity' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'cover_image' => 'required|max:4999|image'
        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/storage/product_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $user = auth()->user();

        $product = new Product;
        $product ->redstore_id = 1;
        $product ->user_shop_id = $user->userShop->id;
        $product ->name = $request->input('name');
        $product ->price = $request->input('price');
        $product ->quantity = $request->input('quantity');
        $product ->brand = $request->input('brand');
        $product ->category = $request->input('category');
        $product ->desc = $request->input('desc');
        $product ->image = $fileNameToStore;

        $product->save();

        return redirect('/shop')->with('success', 'Product added successfuly');
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
