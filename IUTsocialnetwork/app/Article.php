<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $table = 'the_name_of_the_table';
    protected $fillable = [
'user_id', 'content', 'live', 'post_on'
    ];

    protected $dates = ['post_on'];
    //protected $guarded = ['id'];

    public function setLiveAttribute($value)
    {
    	$this->attributes['live']=(boolean)($value);
    }

    public function getShortContentAttribute()
    {
    	return substr($this->content, 0,
                        random_int(60,150)).'...';
    }
}
