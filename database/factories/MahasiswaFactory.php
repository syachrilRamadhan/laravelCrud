<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class MahasiswaFactory extends Factory
{
    public function definition()
    {
        $faker = FakerFactory::create();
        return [
            'name' => $faker->name(),
            'nim' => mt_rand(0000000001,9999999999),
            'gender' => Arr::random(['L', 'P']),
            'alamat' => $faker->address(),
            'fakultas_id' => Arr::random([1,2,3,4,5,6,7]),
        ];
    }
}
