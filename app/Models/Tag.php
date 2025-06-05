<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsToMany;

class Tag extends Model
{
    public function posts(): BelongsToMany{
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
