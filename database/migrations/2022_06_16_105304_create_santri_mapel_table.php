<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri_mapel', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('santri_id');
            $table->String('mapel_id');
            $table->String('kehadiran');
            $table->String('tugas');
            $table->String('uts');
            $table->String('uas');
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
        Schema::dropIfExists('santri_mapel');
    }
}
