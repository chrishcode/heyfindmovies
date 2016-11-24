<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $fillable = ['movie', 'tmdb_id', 'social_shares', 'release_date', 'popularity', 'vote_average'];
}
