<?php

namespace App\Http\Controllers;
use App\food;
use App\resturant;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    
    public function store(Request $request)
    {
      food::create(Request::all());
      return view('success');


    }
    
    public function search(Request $request)
    {

 $resturant= resturant::first();
$foods = food::where('food_name', 'LIKE', '%'.$request->keyword.'%')->get();

//return $foods;
return view('foodresult',compact('resturant','foods'));

    }
    
    public function create()
    {

 $resturants= resturant::first();
$foods = food::all();

return view('map',compact('resturants','foods'));

    }
}
