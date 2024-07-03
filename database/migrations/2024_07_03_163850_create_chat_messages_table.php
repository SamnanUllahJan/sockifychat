<?php

use App\Models\Chat;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Chat::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(ChatMessage::class)->nullable()->constrained()->onDelete('set null');
            $table->morphs('model');
            $table->longText('message')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->tinyInteger('is_reply')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
