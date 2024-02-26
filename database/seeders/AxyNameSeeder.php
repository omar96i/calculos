<?php

namespace Database\Seeders;

use App\Models\AxyName;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AxyNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $axiNames = [
            'Hombre valido - Mujer valida',
            'Hombre invalido - Mujer valida',
            'Hombre valido - Mujer invalida',
            'Hombre invalido - Mujer invalida',
            'Hombre valido - Hombre valido',
            'Hombre valido - Hombre invalido',
            'Hombre invalido - Hombre invalido',
            'Mujer valida - Mujer valida',
            'Mujer valida - Mujer invalida',
            'Mujer invalida - Mujer invalida',

        ];
        foreach ($axiNames as $key => $value) {
            AxyName::create([
                'name' => $value,
            ]);
        }

    }
}
