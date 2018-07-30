<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Articles extends Model
{
//    public function getArticleUserName(){
//        return User::where('id',$this->user_id)->first()->name;
//    }
        public  function user(){
            return $this->belongsTo('App\User');
        }
}
