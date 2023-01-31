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
        Schema::create('iku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perspektif_id')
            ->constrained('perspektif')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('unitkerja_id')
            ->constrained('unitkerja')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('tahun');
            $table->string('ikuatasan');
            $table->string('target_ka');
            $table->string('iku');
            $table->string('target_iku');
            $table->string('satuan');
            $table->string('polaritas');
            $table->integer('bobot');
            $table->string('programkerja');
            $table->string('pj');
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
        Schema::dropIfExists('iku');
    }
};
