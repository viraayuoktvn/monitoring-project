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
        Schema::create('kontrakmanajemenv2', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('tahun');
            $table->string('kpi');
            $table->integer('bobot');
            $table->double('target', 8, 2);
            $table->string('satuan');
            $table->double('real');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontrakmanajemenv2');
    }
};
