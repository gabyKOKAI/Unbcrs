<?php namespace Unbcrs;

use Illuminate\Database\Eloquent\Model;

// instance of Posts class will refer to posts table in database
class Post extends Model {
    //restricts columns from modifying. Used to prevent inserting/updating columns of table
    protected $guarded = [];
    
    // posts has many comments (one-many relationship)
    // returns all comments on that post
    
    public function comments()
    {
      return $this->hasMany('Unbcrs\Comments','on_post');
    }
    
    // returns the instance of the user who is author of that post (many-one relationship)
    public function author()
    {
      return $this->belongsTo('Unbcrs\User','author_id');
    }
}