<?php namespace App\Models;
 
class Restaurant extends \Eloquent {
 
    protected $table = 'restaurants';
 
    public function author()
    {
        return $this->belongsTo('User');
    }
 
}