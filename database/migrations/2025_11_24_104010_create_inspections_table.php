<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('case_id');
            $table->string('type');
            $table->string('requested_by');
            $table->string('start_ts');
            $table->string('location');
            $table->json('checks');
            $table->string('assigned_to');
            $table->boolean('is_reviewed')->default(0);
            $table->string('decision')->nullable();
            $table->string('statement')->nullable();
            $table->timestamps();
        });
    }
        public function down(): void
    {
        Schema::dropIfExists('inspections');
    }

};
