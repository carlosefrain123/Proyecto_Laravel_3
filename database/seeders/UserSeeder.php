<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'administrador',
            'email'=>'administrador@gmail.com',
            'address'=>'Av. Siempre Viva',
            'phone'=>'09999999',
            'password'=>Hash::make('12345678')
        ]);
        User::create([
            'name'=>'doctoruno',
            'email'=>'doctoruno@gmail.com',
            'address'=>'Av. Siempre Viva',
            'phone'=>'09999999',
            'password'=>Hash::make('12345678')
        ]);
        User::create([
            'name'=>'pacienteuno',
            'email'=>'pacienteuno@gmail.com',
            'address'=>'Av. Siempre Viva',
            'phone'=>'09999999',
            'password'=>Hash::make('12345678')
        ]);
        /**TODO: Creamos 17 registros falsos */
        User::factory(17)->create();
    }
}
