<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    protected $appends = [
        'excerpt',
        'content_markdown',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function (self $model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title) . '-' . strtolower(Str::random(5));
            }
        });
    }

    public function scopeDrafted(Builder $query): Builder
    {
        return $query->where('is_published', false);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function getExcerptAttribute(): string
    {
        return Str::of($this->content)->limit(75);
    }

    public function getContentMarkdownAttribute(): ?string
    {
        return Str::markdown($this->content);
    }
}
