<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    protected $table ="tin"; 
    public $primaryKey = "id";
    public $timestamps = true;  
    protected $fillable = ['id', 'lang', 'tieuDe', 'tomTat', 'urlHinh', 'ngayDang', 'noiDung', 'idLT', 'xem','noiBat','anHien','tags'];
    protected $dates = ['ngayDang'];
    protected $attributes= ['xem'=>0, 'noiBat'=>0, 'urlHinh'=>''];
}
