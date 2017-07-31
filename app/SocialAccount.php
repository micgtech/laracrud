<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
	protected $table = "social_accounts";
  	protected $fillable = [ 'provider_id', 'provider_name'];

	public function user()
	{
	    return $this->belongsTo('App\User');
	}

}
