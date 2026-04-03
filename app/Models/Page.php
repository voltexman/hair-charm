<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table(timestamps: false)]
class Page extends Model
{
    protected $fillable = ['name', 'slug', 'meta_title', 'meta_description', 'robots'];
}
