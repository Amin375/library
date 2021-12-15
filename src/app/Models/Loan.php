<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        return $this->belongsToMany(BookCopy::class, 'book_copy_loan')->withTimestamps();
    }

    public function loansCart(): BelongsTo
    {
        return $this->belongsTo(User::class,'sessions');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}