<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([          
            'id'=> 1, 
            'nombre'=>'Miguel',
            'apellidop'=>'Martinez ',
            'apellidom'=>'De los santos',
            'email'=>'migueldelosantos@gmail.com',
            'contraseña'=>bcrypt("santos"),
        ]);
        DB::table('usuarios')->insert([     
            'id'=>2,
            'nombre'=>'Carlos',
            'apellidop'=>'Lopez',
            'apellidom'=>'Garcia',
            'email'=>'carlos@gmail.com',
            'contraseña'=>bcrypt("carlos"),
            'rol'=>'Estudiante',
            
        ]);
    }
}
