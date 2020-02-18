<?php

use Illuminate\Database\Seeder;
use App\Etapa;
use Faker\Generator as Faker;

class EtapasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $etapas = ['Acercamiento','Contacto','Visita','Prueba','Cierre'];
        foreach ($etapas as $key => $etapa){
        	Etapa::create([
        	'etapa'=>$etapa,
        	'orden'=>($key+1),
            'dias'=>$faker->numberBetween(2,15),
        	'color'=>$faker->hexcolor
        ]);
        }
    }
}
