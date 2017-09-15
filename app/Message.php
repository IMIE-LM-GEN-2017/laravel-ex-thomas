<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['subject', 'content', 'sender_id', 'target_id'];

    public function sender(){
        return $this->belongsTo('App\User', 'sender_id');
    }

    public function target(){
        return $this->belongsTo('App\User', 'target_id');
    }
}
