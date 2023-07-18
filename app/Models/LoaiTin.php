<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table ="loaitin"; 
    public $primaryKey = "id";
    public $timestamps = true;  
    protected $fillable = ['id', 'lang', 'ten', 'thuTu', 'anHien'];
    protected $attributes= ['thuTu'=>0, 'anHien'=>0];
}
