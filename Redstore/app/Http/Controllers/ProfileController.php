<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('profile.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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
            'phone' => 'required',
            'id' => 'required',
            'gender' => 'required',
            'cover_image' => 'nullable|max:4999|image'
        ]); 

        //handle file upload
        if($request->hasFile('cover_image')){
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/storage/profile_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $profile = new User_profile;
        $profile->user_id = auth()->user()->id;
        $profile->phone = $request->input('phone');
        $profile->national_id = $request->input('id');
        $profile->image = $fileNameToStore;
        switch($request->input('gender')){
            case 1: 
                $gender = 'Male';
                break;
            case 2: 
                $gender = 'Female';
                break;
            case 3: 
                $gender = 'Other';
                break;
        }

        $profile->gender = $gender;

        $profile->save();

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
}
