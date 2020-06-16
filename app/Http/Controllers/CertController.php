<?php

namespace App\Http\Controllers;

use App\Student;
use App\Animal;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Certificate;

class CertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $certificate = Certificate::findOrFail($id);
        return view('certificato',compact('certificate')); 
    }
}