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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name')->nullable();
            $table->string('date_submit')->nullable();
            $table->string('company')->nullable();
            $table->string('department')->nullable();
            $table->string('type')->nullable();
            $table->string('priority')->nullable();
            $table->string('date_require')->nullable();
            $table->string('description')->nullable();
            $table->string('scope')->nullable();
            $table->string('design_time')->nullable();
            $table->string('design_remark')->nullable();
            $table->string('test_time')->nullable();
            $table->string('test_remark')->nullable();
            $table->string('accept_time')->nullable();
            $table->string('accept_remark')->nullable();
            $table->string('total_time')->nullable();
            $table->string('total_remark')->nullable();
            $table->string('impact')->nullable();
            $table->string('status')->default("Pending for Manager");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
