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
        Schema::create('kontrakmanajemen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perspektif_id')
            ->constrained('perspektif')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('tahun');
            // $table->string('sasaranstrategis');
            $table->string('kpi');
            $table->string('target');
            $table->string('satuan');
            $table->string('polaritas');
            $table->integer('bobot');
            $table->string('pd');
            $table->string('hcfd');
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
        Schema::dropIfExists('kontrakmanajemen');
    }
};
