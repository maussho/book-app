<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Editorial;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $editorial = new Editorial();
        $editorial->name="Editorial Don Bosco";
        $editorial->address="Km 23 Av. America nro. 555";
        $editorial->phone=43434321;
        $editorial->save();

        $editorial2 = new Editorial();
        $editorial2->name="Editorial San Juan de Dios";
        $editorial2->address="Los Pinos nro. 775";
        $editorial2->save();

        $editorial3 = new Editorial();
        $editorial3->name="Editorial Radar";
        $editorial3->address="Los Lirios nro. 401";
        $editorial3->phone=909093234;
        $editorial3->save();
    }
}
