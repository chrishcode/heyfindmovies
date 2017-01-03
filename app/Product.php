<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['title', 'description', 'price', 'reviews', 'amazon_url', 'image_url', 'fb_shares'];

	protected $casts = ['description' => 'array'];
}
