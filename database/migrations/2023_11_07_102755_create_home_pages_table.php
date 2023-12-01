<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('home_pages', static function (Blueprint $table) {
            $table->id();
            $table->string('company_title');
            $table->string('company_subtitle');
            $table->string('service_block_title');
            $table->json('service_first_block');
            $table->json('service_second_block');
            $table->json('service_third_block');
            $table->string('cloud_based_block_title');
            $table->json('cloud_based_blocks');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
