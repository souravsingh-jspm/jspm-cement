<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('key_note_speakers', function (Blueprint $table) {
            $table->id('kns_id');
            $table->string(column: 'kns_image')->nullable();
            $table->string(column: 'kns_name')->nullable();
            $table->string('kns_designation')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('key_note_speakers');
    }
};