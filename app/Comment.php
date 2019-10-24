<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
	
		   protected $table = 'comments';

	    protected $primaryKey = 'id';
protected $fillable = [
        'content', 'user_id', 'post_id', 
    ];
	    public $timestamps = false;
	
	
	
		 public function User()
    {
        return $this->belongsto('App\User');
    }
	
		 public function Post()
    {
        return $this->belongsto('App\Post');
    }
	
	
	
}
