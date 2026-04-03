<?php

namespace App\Models;

use App\Enums\ProductCategory;
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
class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'description', 'category', 'type', 'is_active', 'options'];

    protected $casts = ['is_active' => 'boolean', 'options' => 'array'];

    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('is_active', true);
    }

    #[Scope]
    protected function category(Builder $query, ProductCategory $category): void
    {
        $query->where('category', $category);
    }

    #[Scope]
    protected function type(Builder $query, ?string $type): void
    {
        $query->where('type', $type);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('admin')
            ->fit(Fit::Contain, 200, 200)
            ->nonQueued();
    }
}
