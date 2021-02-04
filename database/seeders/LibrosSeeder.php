<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Libro1=['hola y adios','111111ABC',1,'ferra.jpg'];
        $Libro2=['Adios y Hola','2222222ABC',1,'ironman2.jpg'];
        $Libro3=['pepe','3333333ABC',2,'ironman3.jpg'];
        $Libro4=['Buenas Noches','444444ABC',2,'ironman.png'];
        $arrayLibros=[$Libro1,$Libro2,$Libro3,$Libro4];
        foreach($arrayLibros as $Libro){
            $NuevoLibro = new Libro();
            $NuevoLibro->titulo=$Libro[0];
            $NuevoLibro->isbn=$Libro[1];
            $NuevoLibro->autor=$Libro[2];
            $NuevoLibro->caratula=$Libro[3];
            $NuevoLibro->save();
        }
    }
}
