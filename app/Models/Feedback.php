<?php

namespace App\Models;

use App\Enums\FeedbackStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Feedback extends Model
{
    use HasFactory;
    use Notifiable;

    protected $casts = [
        'status' => FeedbackStatus::class,
    ];

    protected $fillable = ['name', 'contact', 'message', 'status'];
}
