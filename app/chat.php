<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $fillable = ['full_name','email_address', 'user_id'];
    protected $with = ['myuser'];

    public function messages()
    {
        return $this->hasMany(chatMessage::class, 'chat_id', 'id');
    }

    public function myuser(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
