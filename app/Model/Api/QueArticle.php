<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class QueArticle extends Model
{
	protected $table = 'que_article';
	protected $id = 'id';
	
	public $timestamps = true;

	public function user()
	{
		return $this->hasOne('App\Model\Api\User', 'id', 'uid');
	}
	
	public function content()
	{
		return $this->hasOne('App\Model\Api\QueArticleContent', 'id', 'cid');
	}	

	public function column()
	{
		return $this->hasOne('App\Model\Que_Column', 'id', 'cnid');
	}		
}