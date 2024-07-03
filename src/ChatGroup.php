<?php

namespace Samnanullahjan\Sockifychat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGroup extends Model
{
    use HasFactory;

    public function chat()
    {
        return $this->belongsTo(Chat::class,"chat_id");
    }

    public function files()
    {
        return $this->morphToMany(File::class, 'model', 'model_file', 'model_id', 'file_id');
    }
}
