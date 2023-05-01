<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // Membuat factory didalam database class
    public function definition()
    {
        $faker = faker::create();
        return [
            // Arr = helper (mendefin dalam bentuk array)
            'name' => $faker->name(),
            'gender' => Arr::random(['L','P']),
            // nis dimulai dari angka 01 - 99 (sesuai banyak)
            'nis' => mt_rand(0000001, 9999999),
            'class_id' => Arr::random([1,2,3,4])
        ];
    }
}
