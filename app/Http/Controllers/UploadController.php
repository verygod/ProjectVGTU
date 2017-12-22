<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\upload;
use App\Models\Profile;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uploads.index');
    }

    /**
     * Show the form for creating a new resource.
     *å
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'url' => 'required|mimes:jpeg,bmp,png'
          ]);



          $image = $request['url'];
          $destination = 'storage/';

          $filename = Str::lower(
              pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)
              .'-'
              .uniqid()
              .'.'
              .$image->getClientOriginalExtension()
          );
          $imagepath = $image->move($destination, $filename);

          $product = new upload();
          $product->name = $request['name'];
          $product->artist_ID = Auth::id();
          $product->artist_username = Auth::user()->name;
          $product->artist_name = Auth::user()->name;
          $product->like_count = '0';
          $product->url = $imagepath;
          $product->ip_address = $_SERVER['REMOTE_ADDR'];
          $product->save();

          $user = Profile::where('userid', Auth::id())->first();
          $user->upload_count = $user->upload_count + 1;
          $user->update();



          // $images = new Image;
          // $images->name = $request['name'];
          // $images->productID = $product->id;
          // $images->image = $imagepath;
          // $images->save();

          return back()->with('flash_message','Done!');
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
