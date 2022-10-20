<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DosenFactory extends Factory
{
    public function definition()
    {
        $faker = FakerFactory::create();
        return [
            'name' => $faker->name()
        ];
    }
}
