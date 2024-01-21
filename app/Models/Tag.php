<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggables');
    }

    public function users()
    {
        return $this->morphedByMany(User::class, 'taggables');
    }

}
