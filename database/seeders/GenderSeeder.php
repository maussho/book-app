<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// utilizamos el modelo Gender
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creamos una variable y llenamos los campos que tiene la tabla
        $gender = new Gender();
        $gender->name = "Poesia";
        $gender->save();

        $gender2 = new Gender();
        $gender2->name = "Narrativa";
        $gender2->save();

        $gender3 = new Gender();
        $gender3->name = "Dramaturgia";
        $gender3->save();
    }
}
