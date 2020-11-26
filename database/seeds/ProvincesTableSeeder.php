<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas(['provinces']);

    }

    protected function truncateTablas(array $tablas)
    {
        $region = [
            'Buenos Aires',
            'Capital Federal',
            'Catamarca',
            'Chaco',
            'Chubut',
            'Corrientes',
            'Córdoba',
            'Entre Ríos',
            'Formosa',
            'Jujuy',
            'La Pampa',
            'La Rioja',
            'Mendoza',
            'Misiones',
            'Neuquén',
            'Río Negro',
            'Salta',
            'San Juan',
            'San Luis',
            'Santa Cruz',
            'Santa Fe',
            'Santiago del Estero',
            'Tucumán'
        ];
        foreach ($region as $key => $value){
            DB::table('provinces')->insert([
                'name' => $value
            ]);

        }
    }
}
