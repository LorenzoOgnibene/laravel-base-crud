<?php

namespace Database\Seeders;

use App\Models\Reseller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ResellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $resellers = ['Feltrinelli', 'IBM', 'BlockBuster', 'RED', 'Il tempio del libro', 'Librando'];

        foreach ($resellers as $reseller) {
            $newReseller = new Reseller();
            $newReseller->nome = $reseller;
            $newReseller->indirizzo = $faker->unique()->address();
            $newReseller->save();
        }
    }
}
