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
        Schema::create('jurnals', function (Blueprint $table) {
            $table->id();
            $table->string('date', 200);
            $table->foreignId('jadwal_id')->nullable();
            $table->foreignId('rombel_id');
            $table->enum('kehadiran_guru', ['Hadir','Izin','Sakit','Dinas Luar'])->nullable();
            $table->string('material', 200)->nullable();
            $table->string('task', 200)->nullable();
            $table->integer('sakit')->nullable();
            $table->integer('izin')->nullable();
            $table->integer('alpha')->nullable();
            $table->integer('hadir')->nullable();
            $table->string('detail', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('jurnals');
    }
};