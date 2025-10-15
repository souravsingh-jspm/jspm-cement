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
        Schema::create('conferance_committees', function (Blueprint $table) {
            $table->id('cc_id');
            $table->enum('role', ['chief_patron', 'patron', 'convener', 'organizing_chairs', 'organizing_committee']);
            $table->string('cc_image')->nullable();
            $table->string('cc_name')->nullable();
            $table->string('cc_designation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferance_committees');
    }
};