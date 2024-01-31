<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Speciality;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //TODO. Agregamos el "$this->call(RoleSeeder::class);"
        //TODO: Luego ejecutamos el comando php artisan migrate:fresh --seed
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Speciality::factory(8)->create();
    }
    //TODO: Luego de hacer esto, ejecuta este comando php artisan migrate:fresh --seed
}
