<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = User::all();//Get all roles
        $permissions = Permission::all();
        return view('functions.items.index')
            ->with('roles', $roles)
            ->with('permissions', $permissions);
    }


    public function show($id) {
        $user = Profile::where('userid',$id)->first();
        // dd($user);
        return view('profile.index')
            ->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
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
    	$user = User::findOrFail($id);
        $profile = Profile::where('userid', $id)->first();
        return view('profile.edit')
            ->with('user', $profile);
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
            $this->validate($request, [
                'name'=>'required|max:120',
                'surname'=>'required|max:120',
                'university'=>'max:100',
                'faculty'=>'max:120',
                'city'=>'max:120',
                'address'=>'max:200',
                'description'=>'max:300'
            ]);

    $checker = Profile::where('userid', Auth::id())->first();

    if (empty($checker)) {
    $user = new Profile();
    $user->name = Auth::user()->name;
    $user->email = Auth::user()->email;
    $user->surname = $request['surname'];
    $user->profile_image = $request['profile_image'];
    $user->university = $request['university'];
    $user->faculty = $request['faculty'];
    $user->city = $request['city'];
    $user->address = $request['address'];
    $user->twitter = $request['twitter'];
    $user->facebook = $request['facebook'];
    $user->instagram = $request['instagram'];
    $user->about = $request['about'];
    $user->userid = $id;
    $user->save();
    return back()->with('flash_message','Informacija išsaugota!');

    } elseif (!empty($checker)) {

    $user = Profile::where('userid', $id)->first();
    $user->name = $request['name'];
    $user->surname = $request['surname'];
    $user->email = $request['email'];
    $user->profile_image = $request['profile_image'];
    $user->university = $request['university'];
    $user->faculty = $request['faculty'];
    $user->city = $request['city'];
    $user->address = $request['address'];
    $user->twitter = $request['twitter'];
    $user->facebook = $request['facebook'];
    $user->instagram = $request['instagram'];
    $user->about = $request['about'];
    $user->update();

    return back()->with('flash_message','Informacija atnaujinta!');

    } else {
        return back()->with('flash_message','Error!');
    }



    
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
