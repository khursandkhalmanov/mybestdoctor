<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chatMessage extends Model
{
    protected $fillable = ['chat_id','technician_id','message','user_id'];
    protected $with = ['myuser'];

    public function myuser(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
