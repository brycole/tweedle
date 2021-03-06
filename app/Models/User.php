<?php

namespace App\Models;
//namespace App\Models\Tweet;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\Followable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'avatar',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeline()
    {
      $friends = $this->follows()->pluck('id');

      return Tweet::whereIn('user_id', $friends)
          ->orWhere('user_id', $this->id)
          ->withLikes()
          ->latest()
          ->paginate(20);
    }

    public function tweets()
    {
      return $this->hasMany(Tweet::class)->latest();
    }

    public function getAvatarAttribute($value)
    {
      if (is_null($value)) {
        return "https://i.pravatar.cc/200?u=" . $this->email;
      }

      return asset('storage/' . $value);
    }

    public function setPasswordAttribute($password)
    {
      $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
    }

    public function path($append = '')
    {
      $path = route('profile', $this->username);

      return $append ? "{$path}/{$append}" : $path;
    }

    public function likes()
    {
      return $this->hasMany(Like::class);
    }
}
