<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nom',
        'prenomo',
        'age',
        'email',
        'mdp',
        'naissance',
        'genre',
    ]; // model_anchor
     
    protected $table = 'users';


    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
