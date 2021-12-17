<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

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

    public function getExpiredAtAttribute()
    {
        $date = $this['created_at']->format('d-m-Y');

        return Carbon::parse($date)->addMinute()->format('d-m-Y');
    }

}
