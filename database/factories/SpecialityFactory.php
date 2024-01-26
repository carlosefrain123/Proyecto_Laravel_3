<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SpecialityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //TODO: Comando: php artisan make:factory SpecialityFactory
    public function definition(): array
    {
        $options = [
            'Medicina Geneal',
            'Odontologia',
            'Psicología',
            'Pediotria',
            'Urologia',
        ];
        return [
            //
            'name'=>Arr::random($options),
        ];
    }
}
