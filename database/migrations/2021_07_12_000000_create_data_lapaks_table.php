<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataLapaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_lapaks', function (Blueprint $table) {
            $table->id();
            $table->string('dlNamaLapak');
            $table->string('dlKontakLapak', 12);
            $table->text('dlAlamatLapak');
            $table->text('dlLogoLapak');
            $table->text('dlBannerLapak');
            $table->text('dlDeskripsiLapak');
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
        Schema::dropIfExists('data_lapaks');
    }
}
