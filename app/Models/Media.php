<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function posts(): BelongsTo{
        return $this->belongsTo(Post::class,'post_id');
    }
}
