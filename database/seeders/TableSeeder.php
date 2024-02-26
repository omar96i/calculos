<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tableNames = [
            'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Masculino',
            'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Femenino',
            'TABLA DE MORTALIDAD INVALIDOS (Res.585 de 1994 Superbancaria)- sexo Masculino',
            'TABLA DE MORTALIDAD INVALIDOS (Res.585 de 1994 Superbancaria)- sexo Femenino',
        ];

        foreach ($tableNames as $key => $value) {
            Table::create([
                'name' => $value,
            ]);
        }
    }
}
