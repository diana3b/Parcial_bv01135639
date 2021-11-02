<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "nombre"=>"Administrador",
            "apellido" => "Dimas",
            "fechaNacimiento" => "1997-12-20",
            "direccion" => "San salvador",
            "dui" => "1123456-0",
            "genero" => "M",
            "telefono" => 74389435,
            "email" => "admin@gmail.com",
            "password" => bcrypt('admin'),
            "role_id" => 1,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Fatima",
            "apellido" => "Vasquez",
            "fechaNacimiento" => "1996-03-17",
            "direccion" => "San salvador",
            "dui" => "12349834-1",
            "genero" => "F",
            "telefono" => 74388885,
            "email" => "docente1@gmail.com",
            "password" => bcrypt('docente1'),
            "role_id" => 6,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Frank",
            "apellido" => "Corvera",
            "fechaNacimiento" => "1993-09-20",
            "direccion" => "San salvador",
            "dui" => "1239834-3",
            "genero" => "M",
            "telefono" => 74222245,
            "email" => "estudiante1@gmail.com",
            "password" => bcrypt('estudiante1'),
            "role_id" => 7,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Josue",
            "apellido" => "Palacios",
            "fechaNacimiento" => "19997-10-02",
            "direccion" => "San salvador",
            "dui" => "19277774-4",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "estudiante2@gmail.com",
            "password" => bcrypt('estudiante2'),
            "role_id" => 8,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Diego",
            "apellido" => "Delgado",
            "fechaNacimiento" => "1993-09-09",
            "direccion" => "San Miguel",
            "dui" => "12345674-1",
            "genero" => "M",
            "telefono" => 71234945,
            "email" => "docente2@gmail.com",
            "password" => bcrypt('docente2'),
            "role_id" => 9,
        ]);
    }
}
