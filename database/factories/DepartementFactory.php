<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departement>
 */
class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'departement_name' => fake()->randomElement([
                'GA', 
                'Marketing', 
                'Purchasing',  
                'Quality Assurance',
                'Produksi',
                'Finance'
            ]),
            
        ];
    }
}
