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
    protected $primaryKey = 'id';
        protected $fillable   = ['tittle', 'content', 'image_url', 'user_id'];
}
