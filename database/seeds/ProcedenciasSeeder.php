<?php

use Illuminate\Database\Seeder;
use App\Procedencia;
use Faker\Generator as Faker;

class ProcedenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $procedencias = ['Recomendacion','Lo vi','Instagram','Facebook','Convenio','Google','Referido'];
        foreach ($procedencias as $key => $procedencia){
        	Procedencia::create([
        	'procedencia'=>$procedencia,
        	'orden'=>($key+1)
        ]);
        }
    }
}
