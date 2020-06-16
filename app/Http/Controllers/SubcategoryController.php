<?php

namespace App\Http\Controllers;

use App\Student;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $cat = Subcategory::all();
        
        return view('index_subcategory',compact('cat')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {/* 
        return view('create_subcategory'); */
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
            'description' => 'nullable',
            'category_id' => 'required'
        ]);
        $cat = Subcategory::create($storeData);
        return redirect('subcategories');
        
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
        $subcategory = subcategory::findOrFail($id);
        return view('edit_subcategory',compact('subcategory')); 
        /* $student = Student::findOrFail($id);
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
    {/* 
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'ricetta' => 'required'
        ]);
        subcategory::whereId($id)->update($updateData);
        return redirect('/categories')->with('completed', 'Catgory has been updated');
 */
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'category_id' => 'required'
        ]);
        subcategory::whereId($id)->update($updateData);
        return redirect('/subcategories')->with('completed', 'Catgory has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Subcategory::findOrFail($id);
        $cat->delete();
        return redirect('/subcategories')->with('completed','subcategory has been deleted');
        }
}