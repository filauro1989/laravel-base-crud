<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) { 
            $comic = new Comic();
            $comic->title = $faker->word();
            $comic->description = $faker->sentence(20, false);
            $comic->thumb = $faker->imageUrl(300, 300, 'comics', true);
            $comic->price = $faker->randomFloat();
            $comic->series = $faker->word();
            $comic->sale_date = $faker->dateTimeBetween();
            $comic->type = $faker->word();
        }
    }
}
