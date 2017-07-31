<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = "books";
	protected $fillable = ['title', 'isbn', 'description', 'author'];

	public function Author(){

		return $this->belongsTo('Author');
	}
}
