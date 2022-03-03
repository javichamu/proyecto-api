<?php

use App\Libro;
use App\Usuario;
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
        $this->call(UsuarioSeeder::class);
        $this->call(LibroSeeder::class);

/*
        for ($i=0; $i>15;$i++){
            $usuario = Usuario::all()->random();
            $libro = Libro::all()->random()->id;
    
           $usuario->libros()->attach($libro);
       }
    */

    }
}
