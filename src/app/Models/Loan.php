<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'handed_in'
    ];

    public function bookCopies() : BelongsToMany
    {
        return $this->belongsToMany(BookCopy::class, 'book_copy_loan');
    }

    public function loansCart(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'sessions');
    }
}
