<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'tarea'=> 'Practica seeders',
            'descripcion' => "Creacion de seeder para tabla tasks",
            'tipo'=> 'Escuela',
            'created_at' => now(),
            'updated_at' =>now()
            
        ]
    
    );

    }
}
