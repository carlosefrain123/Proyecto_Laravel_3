<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//TODO: Comando de creación de Controller: "php artisan make:controller SpecialityController --model=Speciality"
class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities=Speciality::all();
        return view('specialities.index',[
            'specialities' => $specialities,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speciality $speciality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        //
    }
}
