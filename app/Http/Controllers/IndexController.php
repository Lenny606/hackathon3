<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Animal;
use App\Models\Owner;

class IndexController extends Controller
{
    public function index()
    {

        $animals = Animal::orderBy('name')                     
                  ->limit(15)      
                  ->get();
                
        return view('index.index', compact('animals'));

    }

    public function search()
    {    
        if (isset($_GET['search'])) {

            $name = $_GET['search'];
            $result = Animal::where('name', 'like', '%'.$name.'%')
                        ->orWhere('species', 'like', '%'.$name.'%')
                        ->orWhere('breed', 'like', '%'.$name.'%')
                        ->get();
            
            
             } else {
               
            $name = "";
            $result = []; //change to empty Collection 
             };
            //  dd($result);    
        return view('animals.search', [
            'name' => $name,
            'result' => $result
        ]);
    }
}
