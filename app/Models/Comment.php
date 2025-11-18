<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id' , 'content'];

    public function user() : BelongsTo
    {
        // Define the relationship with the User model
        return $this->belongsTo(User::class);
    }

    public function post() : BelongsTo
    {
        // Define the relationship with the Post model
        return $this->belongsTo(Post::class);
    }
}
