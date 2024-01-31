<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
/**TODO: Comando: $ php artisan make:controller
DoctorController */
class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $filterValue=$request->input('filterValue');
        $doctorsFilter=User::role('Doctor')
        ->where('name','LIKE','%'.$filterValue.'%');
        //Acá es para limitar los datos en el CRUD
        $doctors=$doctorsFilter->simplePaginate(5);
        return view('doctors.index',[
            'doctors' => $doctors,
            'filterValue' => $filterValue,
        ]);
    }
}
