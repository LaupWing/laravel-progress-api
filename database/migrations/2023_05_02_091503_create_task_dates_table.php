<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
    * Run the migrations.
    */
   public function up(): void
   {
      Schema::create("task_dates", function (Blueprint $table) {
         $table->id();
         $table->timestamps();
         $table->date("date");
         $table->boolean("finished");
         $table->foreignIdFor(
            \App\Models\Task::class,
            "task_id"
         )->constrained("tasks")->onDelete("cascade");
         $table->unique(["date", "task_is"]);
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists("task_dates");
   }
};
