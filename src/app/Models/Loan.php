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

    public function bookCopies(): BelongsToMany
    {
        return $this->belongsToMany(BookCopy::class, 'book_copy_loan')->withTimestamps();
    }

    public function loansCart(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sessions');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getExpiredAtAttribute()
    {
        return $this->created_at->addMinute()->format('d-m-Y');
    }

    public function getWeekBeforeAtAttribute()
    {
        $date = $this['created_at']->format('d-m-Y');

        $expiredDate = Carbon::parse($date)->addDay()->format('d-m-Y');

        return Carbon::parse($expiredDate)->subDay()->format('d-m-Y');
    }
//
//    public function isHandedIn()
//    {
//        return $this->where('handed_in', 1) ?? false;
//    }
}
