<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function author(){
        return $this->hasOne(Author::class);
    }

    public function genre(){
        return $this->hasOne(Genre::class);
    }

}
