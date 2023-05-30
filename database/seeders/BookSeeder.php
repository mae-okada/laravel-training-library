<?php

namespace Database\Seeders;

use Database\Factories\BookFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // faker library
        Book::Factory(25)->create();

    }
}
