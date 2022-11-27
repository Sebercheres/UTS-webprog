<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name,
            'publisher_id' => $this->faker->numberBetween(1, 5),
            'year' => $this->faker->year(),
            'synopsis' => $this->faker->paragraph(10),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
        ];
    }
}
