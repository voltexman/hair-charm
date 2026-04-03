<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

#[Table(timestamps: false)]
class Photo extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['title', 'description', 'is_active', 'meta_alt', 'meta_title'];

    protected $casts = ['is_active' => 'boolean'];

    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('is_active', true);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('admin')
            ->fit(Fit::Contain, 200, 200)
            ->nonQueued();
    }
}
