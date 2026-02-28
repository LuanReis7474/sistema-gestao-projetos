<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expenses>
 */
class ExpensesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'category' => $this->faker->word(),
            'value' => $this->faker->randomFloat(2, 10, 1000),
            'project_id' => \App\Models\Projects::factory(),
            'supplier_id' => \App\Models\Suppliers::factory(),            
        ];
    }
}
