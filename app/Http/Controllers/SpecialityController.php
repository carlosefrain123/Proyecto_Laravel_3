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
    //TODOS: Se agrega que solo busque lo que quieres
    public function index(Request $request)
    {
        $filterValue=$request->input('filterValue');
        $specialitiesFilter=Speciality::where('name','LIKE','%'.$filterValue.'%');
        //Acá es para limitar los datos en el CRUD
        $specialities=$specialitiesFilter->simplePaginate(5);
        return view('specialities.index',[
            'specialities' => $specialities,
            'filterValue' => $filterValue,
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
