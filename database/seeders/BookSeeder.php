<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $book = new Book();
        $book->title="Libro Laravel";
        $book->subtitle="Este es el libro desde Cero";
        $book->numberPage=330;
        $book->language="Español";
        $book->description="Este libro va desde cero a diez";
        $book->status="Activo";
        $book->price=20.00;
        $book->gender_id=3;
        $book->editorial_id=1;
        $book->save();


        $book2 = new Book();
        $book2->title="Libro PHP";
        $book2->subtitle="Este es el libro va desde Cero";
        $book2->numberPage=220;
        $book2->language="Español";
        $book2->description="Este libro va desde cero a 8.2";
        $book2->status="Activo";
        $book2->price=30.00;
        $book2->gender_id=1;
        $book2->editorial_id=2;
        $book2->save();


        $book3 = new Book();
        $book3->title="Libro VUE JS";
        $book3->subtitle="Vue JS desde cero";
        $book3->numberPage=270;
        $book3->language="Ingles";
        $book3->description="Este libro va desde cero";
        $book3->status="Bloqueado";
        $book3->price=15.50;
        $book3->gender_id=2;
        $book3->editorial_id=1;
        $book3->save();
    }
}
