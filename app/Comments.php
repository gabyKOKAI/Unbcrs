<?php namespace Unbcrs;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

    //comments table in database
    //restricts columns from modifying. Used to prevent inserting/updating columns of table

    protected $guarded = [];
  
    // user who has commented 
    public function author()
      {
        return $this->belongsTo('Unbcrs\User','from_user');
      }
  
    // returns post of any comment
    public function post()
    {
      return $this->belongsTo('Unbcrs\Posts','on_post');
    }
}