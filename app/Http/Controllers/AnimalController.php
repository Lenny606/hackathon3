<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use DB;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Image;


class AnimalController extends Controller
{
    
    
    
    
    
    
    public function detail ($animal_id)

{


    $animal_detail = Animal::where('id', $animal_id)->first();
    $result = Image::where('id', $animal_id)->first();
    $animal_img = $result->path;
    return view('animals.detail', compact('animal_detail','animal_img'));
    
}
}
