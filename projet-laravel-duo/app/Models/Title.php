<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

	protected $fillable = [
		'petit',
		'grand',
		'description',
	]; // model_anchor

	protected $table = "titles";
}
