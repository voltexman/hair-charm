<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Table(timestamps: false)]
class Setting extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'instagram',
        'facebook',
        'whatsapp',
    ];
}
