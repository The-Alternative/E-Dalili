<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post_Image extends Model
{
    use HasFactory;

    protected $table='post__images';
    protected $fillable=['id','name','url','is_active'];

    Public function Post()
    {
        return $this->belongsToMany(Post::class);
    }
}
