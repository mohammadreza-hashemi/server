<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function oldestComment()
    {
        return $this->hasOne(Comment::class)->oldestOfMany();
    }


    public function largestVote()
    {

        return $this->hasOne(Comment::class)->ofMany('vote', 'max');
    }


    public function anyCondition()
    {
        return $this->hasOne(Comment::class)->ofMany([
            'id' => 'max'

        ], function ($query) {
            return true;
        });
    }

    public function avatars()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function latestImage()
    {
        return $this->morphOne(Image::class, 'imageable')->latestOfMany();
    }

    public function oldestImage()
    {
        return $this->morphOne(Image::class, 'imageable')->oldestOfMany();
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggables');
    }


}
