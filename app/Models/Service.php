<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
	// use HasFactory;
	use SoftDeletes;

	public $table = 'service';

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $fillable = [
		'users_id',
		'title',
		'description',
		'delivery_time',
		'revision_limit',
		'price',
		'note',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	// one to many
	public function user()
	{
		return $this->belongsTo('App\Models\User', 'users_id', 'id');
	}

	public function advantage_user()
	{
		return $this->hasMany('App\Models\AdvantageUser', 'service_id');
	}

	public function advantage_service()
	{
		return $this->hasMany('App\Models\AdvantageService', 'service_id');
	}

	public function thumbnail_service()
	{
		return $this->hasMany('App\Models\ThumbnailService', 'service_id');
	}

	public function tagline()
	{
		return $this->hasMany('App\Models\Tagline', 'service_id');
	}

	public function order()
	{
		return $this->hasMany('App\Models\Order', 'service_id');
	}
}
