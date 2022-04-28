<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'decription1',
        'decription2',
        'info1',
        'info2',
        'info3',
        'price',
        'image',
    ]; // model_anchor

    protected $table = 'courses';
}
