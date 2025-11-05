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
        Schema::create('vehicales', function (Blueprint $table) {
            $table->id();
            $table->string('id');
            $table->string('plate_no');
            $table->string('country');
            $table->string('model');
            $table->string('vin');
        });

        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('id');
            $table->string('type');
            $table->string('name');
            $table->float('reg_code');
            $table->string('vat');
            $table->string('country');
            $table->string('plate_no');
            $table->string('country');
            $table->string('email');
            $table->float('phone', 8);
        });

        Schema::create('users', function (Blueprint $table) {
            $table->string('id');
            $table->string('username');
            $table->string('full_name');
            $table->string('role');
            $table->truefalse('active');
            $table->string('last_activity');

        });
        Schema::create('cases', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
        Schema::create('inspections', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
        Schema::create('documents', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
