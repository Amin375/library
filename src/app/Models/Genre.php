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

    //Sluggable method to make it possible for the title to be a slug
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    //one to many relationship with the book object
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    //algolia method to create indexes for genres so that they are searchable
//    public function searchableAs(): string
//    {
//        return 'genres_index';
//    }
//
//    public function toSearchableArray(): array
//    {
//        $array = $this->toArray();
//
//        return $array;
//    }
}
