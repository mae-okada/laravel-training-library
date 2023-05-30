<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// require_once '/path/to/Faker/src/autoload.php';
// require_once 'vendor/autoload.php';

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //$faker = Faker\Factory::create();
        return [
            //
            'isbn'          => rand(1000000000000, 9999999999999),
            'title'         => $this->faker->word(),
            'author_id'     => $this->faker->numberBetween(1, 5),
            'image_path'    => 'http://www.hachette.co.nz/graphics/CoverNotAvailable.jpg',
            'publisher'     => $this->faker->word(),
            'category'      => $this->faker->word(),
            'pages'         => $this->faker->numberBetween(1, 500),
            'language'      => $this->faker->languageCode(),
            'publish_date'  => $this->faker->dateTime(),
            'subjects'      => $this->faker->word(),
            'desc'          => $this->faker->paragraph(),
            // 'delete_at'     => NULL
        ];
    }
}
