<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsToMany;
use Illuminate\Database\Eloquent\BelongsTo;

class Post extends Model
{
    public function posts(): BelongsToMany{
        return $this->belongsToMany(Post::class, 'post_category');
    }

    public function tags(): BelongsToMany{
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function users(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment(): BelongsToMany{
        return $this->belongsToMany(Comment::class, 'comment_post');
    }
}
