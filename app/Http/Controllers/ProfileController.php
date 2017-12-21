<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index() {
        $user = User::all();//Get all roles
        $permissions = Permission::all();
        return view('functions.items.index')->with('roles', $roles)->with('permissions', $permissions);
    }


    public function show($username) {
        $user = User::findOrFail($username);
        return view('profile.index')->with('user', $user);
    }

}
