<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->text('message_body');
            $table->timestamp('created_at')->useCurrent(); 
            $table->timestamp('updated_at')->nullable(); 
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
