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
        Schema::create('intervals', function (Blueprint $table) {
            $table->id();
            $table->integer('start');
            $table->integer('end')->nullable()->default(null);
            $table->index('start');
            $table->index('end');
            $table->index(['start', 'end']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intervals');
    }
};
