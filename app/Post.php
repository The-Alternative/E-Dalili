<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable=['id','store_id','product_id','social_media_id','description','is_active','price','new_price','start_date','end_date','time'];

}
