<?php

namespace Samnanullahjan\Sockifychat;

use Illuminate\Database\Eloquent\Model;
use Samnanullahjan\Sockifychat\SockifyChat;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chat extends Model
{
    use HasFactory;

    public function members()
    {
        return $this->morphedByMany(SockifyChat::$memberModel, 'model', 'chat_model', 'chat_id', 'model_id')
                    ->withPivot('model_type');
    }

    public function group()
    {
        return $this->hasOne(SockifyChat::$groupModel,"chat_id");
    }

    public function messages()
    {
        return $this->hasMany(SockifyChat::$messageModel,"chat_id");
    }

    /**
     * Determine if the chat is a group.
     *
     * @return bool
     */
    public function isGroup()
    {
        return is_null($this->group);
    }
}
