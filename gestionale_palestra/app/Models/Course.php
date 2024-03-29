<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function project(): HasMany {
        return $this->hasMany(Reservation::class, 'course_id');
    }

}