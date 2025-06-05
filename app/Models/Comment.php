<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;
use Illuminate\Database\Eloquent\BelongsToMany;

class Comment extends Model
{
    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post(): BelongsToMany{
        return $this->belongsToMany(Post::class, 'comment_post');
    }

    public function comment(): BelongsTo{
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}
