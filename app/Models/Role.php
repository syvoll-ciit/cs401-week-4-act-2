<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(): BelongsToMany{
        return $this->belongsToMany(User::class, 'user_role');
    }
}
