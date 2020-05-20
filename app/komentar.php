<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $table = 'komentar';

    protected $fillable = ['konten',];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function forum()
    {
    	return $this->belongsTo(forum::class);
    }
}
