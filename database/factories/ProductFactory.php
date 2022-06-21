<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //generate random informations for product 
            'nom' => $this->faker->Lastname(),
            'description' => $this->faker->text($maxNbChars = 200),
            'price' => $this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
            'picture' => $this->faker->imageUrl($width = 640, $height = 480),
            'category_id' => rand(1,2),
            'state_id' => rand(1,2),
            'state2_id' => rand(1,2),
            'alphanum' => $this->faker->bothify('?###??##'),
            
        ];
    }
}
