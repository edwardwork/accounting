<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('our_services', static function (Blueprint $table) {
            $table->id();
            $table->json('content');
            $table->string('first_section_subtitle');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('our_services');
    }
};
