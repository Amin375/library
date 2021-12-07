<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'genre_id',
        'title',
        'blurb',
        'image',
    ];

    public function author()
    {
        return $this->BelongsTo(Author::class);
    }

    public function genre()
    {
        return $this->BelongsTo(Genre::class);
    }

    public function image()
    {
        return 'assets/'. $this->image;
    }
}
