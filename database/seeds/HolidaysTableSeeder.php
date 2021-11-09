<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {

            $newHoliday = new Holiday();
            $newHoliday->code = $faker->ean8();
            $newHoliday->address = $faker->streetAddress();
            $newHoliday->postal_code = $faker->postcode();
            $newHoliday->country = $faker->city();
            $newHoliday->state = $faker->country();
            $newHoliday->price = $faker->randomFloat(2, 50, 20000);
            $newHoliday->description = $faker->paragraph(2);
            $newHoliday->save();
        }
        
    }
}
