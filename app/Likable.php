<?php

namespace App;

use App\Models\Tweet;
use App\Models\User;

trait Likable
{
    public function like($user = null, $liked = true)
    {
      $this->likes()->updateOrCreate(
        [
          'user_id' => $user ? $user->id : auth()->id(),
        ],
        [
          'liked' => $liked,
        ]
      );
    }

    public function dislike($user = null)
    {
      return $this->like($user, false);
    }

    public function likes()
    {
      return $this->hasMany(Like::class);
    }

    public function isLikedBy(User $user)
    {
      return (bool) $user->likes
        ->where('tweet_id', $this->id)
        ->where('liked', true)
        ->count();
    }

    public function isDislikedBy(User $user)
    {
      return (bool) $user->likes
        ->where('tweet_id', $this->id)
        ->where('liked', false)
        ->count();
    }
}
