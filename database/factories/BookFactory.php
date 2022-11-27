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
            'publisher_id' => $this->faker->numberBetween(1, 20),
            'year' => $this->faker->year(),
            'synopsis' => $this->faker->paragraph(10),
            'image' => 'https://picsum.photos/id/'. (string)$this->faker->randomNumber(3) . '/200'
        ];
    }
}
