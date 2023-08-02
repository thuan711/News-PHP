<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public function category(){
        return $this->belongTo(Category::class,'cate_id','id');
    }
}
