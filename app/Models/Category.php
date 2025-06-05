<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsToMany;

class Category extends Model
{
    public function categories(): BelongsToMany{
        return $this->belongsToMany(Category::class, 'post_category');
    }
}
