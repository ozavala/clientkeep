<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('email');
            $table->string('domain')->unique();
            $table->json('data')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamps();
            
            $table->index('domain');
            $table->index('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenants');
    }
};