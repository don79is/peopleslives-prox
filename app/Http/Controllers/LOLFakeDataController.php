<?php namespace App\Http\Controllers;

use App\Models\LOLCities;
use App\Models\LOLHobbies;
use App\Models\LOLPeoples;
use App\Models\LOLPeoplesHobbiesConnections;
use Faker\Factory;
use Illuminate\Routing\Controller;

class LOLFakeDataController extends Controller
{

    public function generatePeoples(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            LOLPeoples::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'cities_id' =>LOLCities::all()->random()->id

            ]);

        }
    }
    public function generateCities(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            LOLCities::create([
                'id' => $faker->uuid,
                'name' => $faker->city
            ]);

        }
    }
    public function generateHobbies(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            LOLHobbies::create([
                'id' => $faker->uuid,
                'name' => $faker->colorName
            ]);

        }
    }
    public function generatePeoplesHobbiesConnections(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            LOLPeoplesHobbiesConnections::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'lol_peoples_id' => LOLPeoples::all()->random()->id,
                'lol_hobbies_id' => LOLHobbies::all()->random()->id
            ]);

        }
    }




}

