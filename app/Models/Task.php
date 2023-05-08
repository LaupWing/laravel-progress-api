<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
   use HasFactory;

   protected $fillable = [
      "name",
      "section"
   ];

   public function user(): BelongsTo {
      return $this->belongsTo(User::class, "user_id");
   }

   public function section(): BelongsTo {
      return $this->belongsTo(section::class, "section_id");
   }

   public function taskDates(): HasMany {
      return $this->hasMany(
         TaskDate::class,
         "task_id"
      );
   }
}
