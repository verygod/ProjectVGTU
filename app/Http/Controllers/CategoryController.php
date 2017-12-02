<?php

namespace App\Http\Controllers;

use App\Category;	
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        return view('functions.categories.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $roles = Role::get(); //Get all roles
        // return view('admin.permissions.index')->with('roles', $roles);
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
            'name'=>'required|max:40|unique:categories,name',
        ]);

        $name = $request['name'];
        $category = new Category();
        $category->name = $name;
        $category->activity = 'active';

        $category->save();

        return back()->with('flash_message',
             'Category '. $category->name.' added!');

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
        $categories = Category::where('id', $id)->first();
        return view('functions.categories.edit')
            ->with('categories', $categories);
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
            'name'=>'required|max:40', //Unique, bet turi ignoruot jei vertė ta pati.
            'activity' => 'required|max:50',
        ]);

        
        $category = Category::where('id', $id)->first();
        $category->name = $request['name'];
        $category->activity = $request['activity'];
        $category->update();

        return redirect('categories')
            ->with('flash_message', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->back()
            ->with('flash_message',
             'Category deleted!');
    }
}
