<?php

namespace App\Http\Controllers;

use App\resturant;
use App\food;
use Request;

class resturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $resturant = resturant::findOrfail($id);
        $foods = food::all();
        return view('profile', compact('resturant','foods'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
resturant::create(Request::All());
        return  view('success');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function show(resturant $resturant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function edit(resturant $resturant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resturant $resturant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function destroy(resturant $resturant)
    {
        //
    }
}
