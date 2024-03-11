<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profile = new Profile();
        $profile->biography="Esta es la biografia completa del autor";
        $profile->website="www.google.com.bo";
        $profile->save();

        $profile2 = new Profile();
        $profile2->biography="Para generar y ejecutar un Seeder en Laravel, utilizaremos Artisan a través de la Terminal. En primer lugar, crearemos un seeder para el modelo “Profesor”. Ejecutamos la siguiente línea de código de Artisan.";
        $profile2->website="www.tulibro.com";
        $profile2->save();

        $profile3 = new Profile();
        $profile3->biography="crearemos un seeder para el modelo “Profesor”. Ejecutamos la siguiente línea de código de Artisan.";
        $profile3->website="www.google.com.bo";
        $profile3->save();

    }
}
