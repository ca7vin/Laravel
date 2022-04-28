<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'map',
        'phone',
        'mobile',
    ]; // model_anchor

    protected $table = 'contacts';
}