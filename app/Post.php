<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	   protected $table = 'posts';

	    protected $primaryKey = 'id';
protected $fillable = [
        'title', 'content', 'user_id', 'section_id',
    ];
	    public $timestamps = false;
	
	
		 public function Section()
    {
        return $this->belongsto('App\Section');
    }
		 public function User()
    {
        return $this->belongsto('App\User');
    }
	
		 public function comment()
    {
        return $this->hasMany('App\Comment');
    }
	
	  public function Photos()
    {
        return $this->belongsToMany('App\Post');
    }
	
}
