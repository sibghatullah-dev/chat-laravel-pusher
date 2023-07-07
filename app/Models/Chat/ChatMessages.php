<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ChatMessages extends Model
{
    protected $table = "chatmessages";

    protected $fillable = [
        'Chat_id','sender_user_id', 'reciever_user_id', 'message_body'
    ];



    public function sender()
    {
        return $this->hasOne(User::class,'id', 'sender_user_id');
    }



    public function reciever()
    {
        return $this->hasOne(User::class,'id', 'reciever_user_id');
    }




}
