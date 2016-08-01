<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content', 'user_id', 'category_id', 'path'];

    public function category()
    {
    	return $this->belongsTo('Blog\Category');
    }
    public function user()
    {
    	return $this->belongsTo('Blog\User');
    }
}

