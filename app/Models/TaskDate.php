<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDate extends Model
{
   use HasFactory;

   protected $fillable = [
      "finished"
   ];

   public function tasks() {
      return $this->belongsTo(Task::class);
   }
}
