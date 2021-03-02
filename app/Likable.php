<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

use App\Models\Tweet;
use App\Models\User;

trait Likable
{

    public function scopeWithLikes(Builder $query)
    {
      // postgres specific query
      $query->leftJoinSub(
      'select
        tweet_id,
        count(liked) filter (where liked = true) as likes,
        count(liked) filter (where liked = false) as dislikes
      from likes
      group by tweet_id',
      'likes',
      'likes.tweet_id',
      'tweets.id'
    );
    }


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
