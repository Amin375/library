<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'street',
        'house_number',
        'postal_code',
        'city',
        'country',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function routeNotificationForMail($notification)
    {
        // Return email address only...
        return $this->email;
    }

    public function role()
    {
        return $this->BelongsTo(Role::class);
    }

    public function isAdmin(): bool
    {
        return $this->role->title === 'admin';
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function isBlackListed()
    {
        $loan = $this->whereHas('loans', function ($q) {
            $q->whereHandedIn(0);
        })->first();

        return $loan->created_at->addMinute()->lessThan(now());
    }
}
