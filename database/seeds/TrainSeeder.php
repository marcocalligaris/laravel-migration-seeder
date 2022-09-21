<?php
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++){
            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->destination = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->ean8();
            $train->wagons = $faker->randomDigitNotNull();
            $train->is_in_time = $faker->boolean();
            $train->is_canceled = $faker->boolean();

            $train->save();
        }
    }
}
