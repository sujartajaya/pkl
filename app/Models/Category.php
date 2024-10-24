<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = [
        'category',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
