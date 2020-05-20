<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravelista\Comments\Commentable;


class sumatera extends Model
{
    use Sluggable, Commentable;
    protected $fillable = [
        'tittle', 'role', 'note', 'Ingredients', 'Instruction', 'thumbnail', 'slug', 'admin_id',
    ];

    protected $dates=['created_at'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'tittle'
            ]
        ];
    }

    public function admin(){
    	return $this->belongsTo(Admin::class);
    }

    public function thumbnail()
    {
    	if (!$this->thumbnail){
    		return asset('img/no-thumbnail.png');
    	}
    	return $this->thumbnail;
    }
}
