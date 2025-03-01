<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    
    /**
     * comments
     *
     * @return void
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}