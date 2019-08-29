<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopVideo extends Model
{
	protected $guarded = [];

	public function video()
	{
		return $this->belongsTo(Video::class);
	}
}
