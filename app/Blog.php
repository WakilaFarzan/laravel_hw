<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

    protected $guarded = [];

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
