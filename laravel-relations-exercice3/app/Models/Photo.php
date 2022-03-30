<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
     
     
    protected $fillable = [
        'lien',
    ]; // model_anchor
     
    protected $table = 'photos';

    public function joueur()
    {
        return $this->hasOne(Joueur::class);
    }
}
