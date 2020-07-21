<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $fillable = ['name', 'slug', 'logo_uri', 'history', 'description', 'club_state', 'status', 'meta_title', 'meta_keywords', 'meta_description'];
	
	//protected $guarded = [];
	
    public function players()
    {
        return $this->hasMany(Player::class);
    }
	
	public function points()
    {
        return $this->hasMany(Point::class);
    }
}
