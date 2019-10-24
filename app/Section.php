<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
	
	    protected $table = 'sections';

	    protected $primaryKey = 'id';
protected $fillable = [
        'name', 'name_role',
    ];
	    public $timestamps = false;

	
	public function Admin()
    {
        return $this->belongsTo(User::class);
    }
	
		 public function Post()
    {
        return $this->hasMany('App\Post');
    }
	
	
	
}
