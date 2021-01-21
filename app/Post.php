<?php

namespace App;

use App\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Post_Image;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable=['id','store_id','product_id','description','is_active','price','new_price','start_date','end_date','time','Post_Type'];


    public function category()
    {
        return $this->belongsToMany(category::class);

    }
    public function PostsImage()
    {
        return $this->belongsToMany(Post_Image::class);
    }
}
