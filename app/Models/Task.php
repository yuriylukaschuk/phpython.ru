<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

	protected $fillable = [
		'title',
		'descriprion',
		'status',
		'created_at',
	];

	protected $casts = [
		'created_at' => 'datetime',
	];
}
