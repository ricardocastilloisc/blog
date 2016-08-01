<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    //hacer la relación de 1 a muchos
    
    public function articles()
    {
        return $this->hasMany('Blog\Article');
    }
    //
}
