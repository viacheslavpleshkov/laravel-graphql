<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'comments';

	/**
	 * @var array
	 */
	protected $fillable = ['reply', 'post_id', 'status'];

	public function post()
	{
		return $this->belongsTo('App\Post');
	}
}