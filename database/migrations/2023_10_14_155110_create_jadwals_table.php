<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('day', 200);
            $table->foreignId('teacher_id');
            $table->foreignId('mapel_id');
            $table->foreignId('rombel_id');
            $table->foreignId('jurusan_id');
            $table->integer('start');
            $table->integer('finish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('jadwals');
    }
};