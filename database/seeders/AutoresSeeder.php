<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Autor1=["Pepe Robleda"];
        $Autor2=["Manolo Escobar"];
        $ArrayAutores = [$Autor1,$Autor2];
        foreach($ArrayAutores as $Autor){
            $NuevoAutor = new Autor();
            $NuevoAutor->nombre=$Autor[0];
            $NuevoAutor->save();
        }
    }
}
