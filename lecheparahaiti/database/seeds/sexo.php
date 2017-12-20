<?php

use Illuminate\Database\Seeder;

class sexo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexos')->insert([
        	[
        		'tipo' => 'masculino',
        	],
            [
        		'tipo' => 'femenino',
        	],
        ]);
    }
}
