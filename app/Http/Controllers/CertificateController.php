<?php

namespace App\Http\Controllers;

use App\Student;
use App\Animal;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Certificate;

class CertificateController extends Controller
{
    /**
     * ONLY FOR ADMIN
    */
    public function index()
    { 
        $cert = Certificate::all();
        $sub = Subcategory::all();
        $animal = Animal::all();
        return view('index_certificate',compact('cert','animal','sub')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
/*         $animal = Animal::findOrFail($request->id);
        $cert = new Certificate();
        $cert->id = $id;
        $cert->personal = '';
        $cert->animal_id = $id;
        $cert->proprietario = '';
        $cert->regalo = 0;
        $cert->mittente = '';
        $cert->dedica = '';
        $cert->image_big = '';
        $cert->save();
        return view('index_animal'); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cert = new Certificate;
        $cert->id = $request->input('id');
        $cert->personal = $request->input('personal');
        $cert->animal_id = $request->input('animal_id');
        $cert->proprietario = $request->input('proprietario');
        $cert->regalo = $request->input('regalo');
        $cert->mittente = $request->input('mittente');
        $cert->dedica = $request->input('dedica');
        $cert->image_big = $request->input('image_big');
        $cert->venduto_giorno = $request->input('venduto_giorno');        
        /*$cert->regalo = $request->input('regalo'); */
        $cert->save();
        return redirect('certificates');
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
        $cert = Certificate::findOrFail($id);    
        return view('edit_certificate',compact('cert'));
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
            'id' => 'max:255',
            'personal' => 'bail',
            'animal_id' => 'max:255',
            'proprietario' => 'max:255',
            'regalo' => 'bool',
            'mittente' => 'max:255',
            'dedica' => 'max:255',
            'image_big' => 'max:255'
        ]);
        Certificate::whereId($id)->update($storeData);
        return redirect('/certificates')->with('completed', 'Animal has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function certificato(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        console.log('success');
        dd($animal);
        /*    $cert = new Certificate();
        $cert->id = $id;
        $cert->personal = '';
        $cert->animal_id = $id;
        $cert->proprietario = '';
        $cert->regalo = 0;
        $cert->mittente = '';
        $cert->dedica = '';
        $cert->image_big = '';
        $cert->save();
        return redirect('animals');  
     */}    
    public function destroy($id)
    {
        $cert = Certificate::findOrFail($id);
        $cert->delete();
        return redirect('/certificates')->with('completed','Animal has been deleted');
        }
}