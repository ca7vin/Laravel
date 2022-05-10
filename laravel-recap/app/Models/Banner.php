<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'title',
        'text',
        'btn1',
        'icon1',
        'link1',
        'btn2',
        'icon2',
        'link2',
        'img',
    ]; 
     
    protected $table = 'banners';
}
