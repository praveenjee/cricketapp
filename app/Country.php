<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function players()
	{
		return $this->hasMany(Player::class);
	}
}
