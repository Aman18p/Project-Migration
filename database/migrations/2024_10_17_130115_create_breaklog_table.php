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
        Schema::create('breaklog', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('break_date');
            $table->time('break_start_time'); // Correcting break_start_time to 'time' datatype
            $table->time('break_end_time'); // Correcting break_end_time to 'time' datatype
            $table->float('total_break_minutes');
            $table->timestamps(); // This will add created_at and updated_at automatically
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breaklog');
    }
};

