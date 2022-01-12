<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Genre extends Model
{
    use HasFactory, Searchable, Sluggable;

    protected $fillable = [
        'title'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function searchableAs(): string
    {
        return 'genres_index';
    }

    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        return $array;
    }
}
