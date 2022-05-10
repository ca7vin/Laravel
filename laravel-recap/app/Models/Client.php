<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'active',
        'name',
        'date',
        'category',
        'rating',
        'img',
        'quote',
        'job',
    ]; 
     
    protected $table = 'clients';
}
