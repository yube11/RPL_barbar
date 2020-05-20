<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class forum extends Model
{
    use Sluggable;

    protected $table = 'forum';

    protected $dates=['created_at'];

    protected $fillable = [
        'user_id','konten','slug','judul',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function komentar()
    {
    	return $this->hasMany(komentar::class);
    }

}
