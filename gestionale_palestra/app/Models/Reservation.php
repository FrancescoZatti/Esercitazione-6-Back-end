<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    public function course(): BelongsTo {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'users_id');
    }
}
