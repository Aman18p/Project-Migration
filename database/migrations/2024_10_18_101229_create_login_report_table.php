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
        Schema::create('loginreport', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('login_date');
            $table->time('login_time');
            $table->time('logout_time');
            $table->float('total_hours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loginreport');
    }
};
