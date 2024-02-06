<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
/**TODO: Comando: $ php artisan make:controller
DoctorController */
class DoctorController extends Controller
{
    public function index(Request $request){
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
    public function create(){
        $specialities=Speciality::all();
        //TODO: Retorna la vista
        return view('doctors.create',compact('specialities'));
    }
    public function store(DoctorRequest $request){
        // Obtener todos los datos del formulario excepto _token, specialities y password_confirmation
        $doctorData = $request->except('_token', 'specialities', 'password_confirmation');

        // Crear un nuevo usuario con los datos del formulario
        $user = User::create($doctorData);
        $user->roles()->sync(2);
        // Adjuntar las especialidades al usuario recién creado
        if ($request->has('specialities')) {
            $user->specialities()->attach($request->input('specialities'));
        }


        // Redirigir después de guardar
        return redirect()->action([DoctorController::class,'index'])
            ->with('success-create', 'Doctor agregado con éxito');
    }
    public function show(User $doctor){
        $doctor=User::find($doctor->id);
        $specialities = $doctor->specialities()->select('name')->get();
        return view('doctors.show',compact('doctor','specialities'));
    }
    public function edit(User $doctor){
        $specialities = Speciality::all(); // Obtén todas las especialidades
        $ids_specialities = $doctor->specialities()->pluck('specialities.id');

        return view('doctors.edit', compact('doctor', 'specialities', 'ids_specialities'));
    }
    public function update(DoctorRequest $request, Speciality $doctor)
    {
        $doctor=User::find($doctor->id);
        if (!$doctor) {
            abort(404,'Doctor no encontrado');
        }else{
            $doctor->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);
            $doctor->specialities()->sync($request->input('specialities'));
            return redirect()->action([DoctorController::class,'index'])
        ->with('success-update', 'Doctor modificado con éxito');
        }

    }

}
