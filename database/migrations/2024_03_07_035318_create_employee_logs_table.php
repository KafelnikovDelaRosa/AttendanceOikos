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
        Schema::create('employee_logs', function (Blueprint $table) {
            $table->increments('log_no');
            $table->integer('employee_id');
            $table->string('name');
            $table->string('role');
            $table->string('checked_in');
            $table->string('time_cooldown');
            $table->string('checked_out')->nullable();
            $table->string('date_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_logs');
    }
};
