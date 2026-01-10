<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('keis', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('external_ref');
            $table->string('status');
            $table->string('priority');
            $table->string('arrival_ts');
            $table->string('checkpoint_id');
            $table->string('origin_country');
            $table->string('destination_country');
            $table->json('risk_flags');
            $table->string('declarant_id');
            $table->string('consignee_id');
            $table->string('vehicle_id');
            $table->timestamps();
            
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('keis');
    }
};
