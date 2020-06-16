<?php

namespace App\Http\Controllers;

use App\Student;
use App\Animal;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Certificate;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        $sub = Subcategory::all();
        $animal = Animal::all();
        return view('index_animal',compact('animal','sub')); 
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
            'name' => 'max:255',
            'price' => 'max:255',
            'recipe' => 'max:255',
            'code' => 'max:255',
            'birthday' => 'max:255',
            'image' => 'max:255',
            'description' => 'max:255',
            'subcategory_id' => 'required',
        ]);
        $animal = Animal::create($storeData);
        return redirect('animals');
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
        $animal = Animal::findOrFail($id);
    
        $sub = Subcategory::all();
        return view('edit_animal',compact('animal','sub'));
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
        $storeData = $request->validate([
            'name' => 'max:255',
            'price' => 'max:255',
            'recipe' => 'max:255',
            'code' => 'max:255',
            'birthday' => 'max:255',
            'image' => 'max:255',
            'description' => 'max:255',
            'subcategory_id' => 'required',
            'venduto' => 'bool'
        ]);
        Animal::whereId($id)->update($storeData);
        return redirect('/animals')->with('completed', 'Animal has been updated');
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect('/animals')->with('completed','Animal has been deleted');
        }
}