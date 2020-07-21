<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $fillable = ['first_name', 'last_name', 'image_uri', 'history', 'description', 'jersey_number', 'team_id',  'status', 'country_id', 'meta_title', 'meta_keywords', 'meta_description'];
	
	//protected $guarded = [];
	
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
	
	public function country()
	{
		return $this->belongsTo(Country::class);
	}
}
