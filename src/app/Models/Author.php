<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Author extends Model
{
    use HasFactory, Searchable, Sluggable;

    protected $fillable = [
      'name',
    ];

//    protected $touches = ['books'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function searchableAs(): string
    {
        return 'authors_index';
    }

    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        return $array;
    }
}
