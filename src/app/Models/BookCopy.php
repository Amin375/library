<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCopy extends Model
{
    use HasFactory;

    public $table = 'book_copies';

    protected $fillable = [
        'book_id',
        'available',
    ];

    public function book()
    {
        return $this->BelongsTo(Book::class);
    }

    public function loans()
    {
        return $this->BelongsToMany(Loan::class, 'book_copy_loan')->withTimestamps();
    }


}
