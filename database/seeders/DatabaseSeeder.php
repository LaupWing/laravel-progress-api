<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    */
   public function run(): void
   {
      \App\Models\User::factory(10)->create();
      $tasks = \App\Models\Task::factory(200)->create();
      foreach ($tasks as $key => $value) {
         \App\Models\TaskDate::factory()->create([

         ]);
      }
      // \App\Models\User::factory()->create([
      //     'name' => 'Test User',
      //     'email' => 'test@example.com',
      // ]);
   }
}
