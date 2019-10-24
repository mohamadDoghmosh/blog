<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
	
		   protected $table = 'photos';

	    protected $primaryKey = 'id';
protected $fillable = [
        'path', 
    ];
	    public $timestamps = false;
	
	  public function Post()
    {
        return $this->belongsToMany('App\Post');
    }
	
}
