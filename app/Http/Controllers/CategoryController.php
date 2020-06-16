<?php

namespace App\Http\Controllers;

use App\Student;
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
        $cat = Category::all();
        return view('index_category',compact('cat')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {/* 
        return view('create_category'); */
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $storeData = $request->validate([
            'name' => 'required|max:255',
            'ricetta' => 'required'
        ]);
        $cat = Category::create($storeData);
        return redirect('categories');
        
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
        $category = Category::findOrFail($id);
        return view('edit_category',compact('category'));
/*         $student = Student::findOrFail($id);
        return view('edit', compact('student')); */
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
    $updateData = $request->validate([
        'name' => 'required|max:255',
        'ricetta' => 'required'
        ]);
        Category::whereId($id)->update($updateData);
        return redirect('/categories')->with('completed', 'Catgory has been updated');
            /* 
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|max:255',
            ]);
            Student::whereId($id)->update($updateData);
            return redirect('/students')->with('completed', 'Student has been updated');
            */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::findOrFail($id);
        $cat->delete();
        return redirect('/categories')->with('completed','Category has been deleted');
        }
}