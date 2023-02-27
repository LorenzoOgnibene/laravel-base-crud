<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newBook = new Book();
            $newBook->ISBN = $faker->unique()->isbn13();
            $newBook->title = $faker->realTextBetween(10, 30);
            $newBook->description = $faker->realTextBetween(600, 1200);
            $newBook->author = $faker->name();
            $newBook->publication_year = $faker->year();
            $newBook->cover_image = $faker->imageUrl();
            $newBook->genre = $faker->realTextBetween(10, 15);
            $newBook->publishing_house = $faker->realTextBetween(20, 30);
            $newBook->language = $faker->languageCode();
            $newBook->save();
        }
    }
}
