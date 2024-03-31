<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppingChoices = [
          'Extra Cheese',
          'Black Olives',
          'Pepperoni',
          'Sausage',
          'Anchovies',
          'Jalapenos',
          'Onion',
          'Chicken',
          'Ground Beef',
          'Green Peppers'
        ];

        $toppings = [];

        for($i = 0; $i <= rand(1,4); $i++)
        {
            $toppings[] = Arr::random($toppingChoices);
        }
        $toppings = array_unique($toppings);

        return [
            'id' => rand(11111, 99999),
            'user_id' => rand(1,10),
            'size' =>Arr::random(['Small', 'Medium', 'Large', 'Extra-Large']),
            'crust' => Arr::random(['Normal', 'Thin', 'Garlic']),
            'toppings' => $toppings,
            'status' => Arr::random(['Ordered', 'Prepping', 'Baking', 'checking', 'Ready']),
        ];
    }
}
