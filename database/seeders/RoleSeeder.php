<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//TODO: Comando: php artisan make:seeder RoleSeeder
//TODO: Se agrega las librerias
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //TODO: Utilizamos este comando, lo que vendrian hacer los roles
        $admin = Role::create(['name' => 'Administrador']);
        $doctor = Role::create(['name' => 'Doctor']);
        $patiente = Role::create(['name' => 'Paciente']);
    }
}
