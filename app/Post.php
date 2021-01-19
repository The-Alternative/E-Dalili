<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\category;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable=['id','store_id','product_id','description','is_active','price','new_price','start_date','end_date','time'];


    public function category()
    {
        return $this->belongsToMany(category::clss);

    }
}
