<?php

namespace Database\Factories;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $model=Employee::class;
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'job'=>$this->faker->jobTitle(),
            'salary'=>$this->faker->numberBetween(1200,2500)
        ];
    }
}
