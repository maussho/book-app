<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;

use App\Models\Book;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // llamamos a los seeder, osea a los hijos
        $this->call(GenderSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(EditorialSeeder::class);
        $this->call(BookSeeder::class);
        // llamamos a los factories
       Book::factory(20)->create();
       Author::factory(50)->create();
       User::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
