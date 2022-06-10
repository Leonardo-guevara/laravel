<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasApiTokens, HasFactory, Notifiable;
    // use HasApiTokens, Notifiable;

    use HasFactory;
    protected $table = 'post';
    // protected $primaryKey = 'id';
    //     protected $fillable   = ['tittle', 'content', 'image_url', 'user_id'];

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function test()
    {
        return $this->belongsTo(User::class, 'user_id'); //, 'other_key'
    }

}
