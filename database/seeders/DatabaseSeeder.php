<?php

namespace Database\Seeders;

use App\Models\Documento;
use App\Models\Provincia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Provincia Seeds
        Provincia::create(['provincia' => 'CABA']);
        Provincia::create(['provincia' => 'Buenos Aires']);
        Provincia::create(['provincia' => 'Cordoba']);
        Provincia::create(['provincia' => 'Mendoza']);
        Provincia::create(['provincia' => 'San Juan']);
        Provincia::create(['provincia' => 'San Luis']);
        Provincia::create(['provincia' => 'Santa Fe']);
        Provincia::create(['provincia' => 'La Pampa']);
        Provincia::create(['provincia' => 'Corrientes']);
        Provincia::create(['provincia' => 'Entre Rios']);

        // Documento Seeds
        Documento::create(['tipo_documento' => 'DNI']);
        Documento::create(['tipo_documento' => 'PASAPORTE']);
    }
}
