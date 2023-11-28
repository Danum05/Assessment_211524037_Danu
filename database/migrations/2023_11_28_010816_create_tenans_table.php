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
        Schema::create('tenan', function (Blueprint $table) {
            $table->id();
            $table->string('KodeTenan');
            $table->unique('KodeTenan');
            $table->string('NamaTenan');
            $table->string('HP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenan');
    }
};
