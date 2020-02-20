<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
   /* protected $primaryKey = "game_id";*/
   /* protected $fillable=[
        'user_id','game_id'
    ];*/

    public function comments()
    {
     return $this->hasMany(Comment::class);
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

}
