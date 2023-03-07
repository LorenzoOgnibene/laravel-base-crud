<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Reseller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BooksResellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $books = Book::all();

        $resellersID = Reseller::all()->pluck('id');

        foreach ($books as $book) {
            $book->resellers()->attach($faker->randomElements($resellersID, 2));
        }
    }
}
