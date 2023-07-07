<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ChatModel extends Model
{

    protected $table = "chat";

    protected $fillable = [ 'parent_user_id', 'user_sender_id', 'user_reciever_id'];

    public function sender()
    {
        return $this->hasOne(User::class,'id', 'user_sender_id');
    }



    public function reciever()
    {
        return $this->hasOne(User::class,'id', 'user_reciever_id');
    }







}
