<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;

class Todolist extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

	use Sluggable;
	use SluggableScopeHelpers;
	public function sluggable(){
		return [
			'slug' =>[
				'source' => 'name'
			]
		];
	}
    //
    private $rules = [
    	'name' => 'required',
    	'description' => 'required'
    ];
    public function tasks(){
    	return $this->hasMany('App\Task');
    }
    public function categories(){
    	return $this->belongsToMany('App\Category')->withTimestamps();
    }
    public function comments(){
    	return $this->morphMany('\App\Comment','commentable');
    }
}
