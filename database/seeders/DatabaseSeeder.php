<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(15)->create();
        \App\Models\Note::factory(15)->create();
        \App\Models\Product::factory(15)->create();
        \App\Models\Task::factory(15)->create();
        \App\Models\Book::factory(15)->create();


    }
}
