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
            $table->string('perspektif');
            $table->string('ikuatasan');
            $table->string('target_ka');
            $table->string('iku');
            $table->string('target_iku');
            $table->string('satuan');
            $table->string('polaritas');
            $table->integer('bobot');
            $table->string('programkerja');
            $table->string('pj');
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
