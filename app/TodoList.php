<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function tasks()
    {
        return $this->hasMany('App\Task')
            ->orderBy('created_at', 'desc')
            ->where('done', true);
    }

    public function categories()
    {
        return  $this->belongsToMany('App\Category')
            ->withTimestamps();
    }

    public function comments()
    {
        return  $this->morphMany('App\Comment',  'commentable');
    }

}
