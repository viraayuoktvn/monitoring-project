<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikuv2', function (Blueprint $table) {
            $table->id();
            $table->foreignId('iku_id')
            ->constrained('iku')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('tahun');
            $table->string('bulan');
            $table->string('real');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ikuv2');
    }
};
