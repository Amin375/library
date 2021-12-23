<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use HasFactory, Searchable;

//    protected $with = ['author', 'genre'];

    protected $fillable = [
        'author_id',
        'genre_id',
        'title',
        'blurb',
        'image',
    ];

//    protected $touches = ['author', 'genre'];


    public function author(): BelongsTo
    {
        return $this->BelongsTo(Author::class);
    }

    public function genre(): BelongsTo
    {
        return $this->BelongsTo(Genre::class);
    }

    public function image()
    {
        return 'assets/' . $this->image;
    }

    public function bookCopies()
    {
        return $this->hasMany(BookCopy::class, 'book_id');
    }

    public function firstAvailableBookCopyId()
    {
        //Add where clause for available
        return $this->bookCopies()->where('available', 1)->first()->id ?? false;
    }

    public function searchableAs()
    {
        return 'books_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['genre'] = $this->genre->title;
        $array['author'] = $this->author->name;

        return $array;
    }
}
