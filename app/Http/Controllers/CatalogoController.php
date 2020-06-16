<?php

namespace App\Http\Controllers;

use App\Student;
use App\Animal;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Certificate;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $cat = Category::all();
        $sub = Subcategory::all();
        $cert = Certificate::all();
        $animal = Animal::all()->sortBy('subcategory_id');
        //IGNORA QUELLI CHE HANNO IL VENDUTO->aggiungi clausola where
        return view('catalogo',compact('animal','sub','cat','cert')); 
    }

    
}