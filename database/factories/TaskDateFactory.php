<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskDate>
 */
class TaskDateFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      return [
         "date" => fake()->dateTimeBetween("-10 days", now()),
         "task_id" => Task::all()->random()->id
      ];
   }
}
