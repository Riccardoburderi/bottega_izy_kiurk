<?php

namespace App\Http\Controllers;

use App\Student;
use App\Animal;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
use Illuminate\Support\Facades\DB;


class BottegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('bottega'); 
    }

    
}