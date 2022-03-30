<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nom',
        'limite',
    ]; // model_anchor
     
    protected $table = 'postes';
    
    public function joueurs()
    {
        return $this->hasMany(Joueur::class);
    }
}
