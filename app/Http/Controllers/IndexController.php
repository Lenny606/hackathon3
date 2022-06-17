<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Animal;

class IndexController extends Controller
{
    public function index()
    {

        $animals = Animal::orderBy('name')                     
                  ->limit(15)      
                  ->get();

        return view('index.index', compact('animals'));


    }
}
