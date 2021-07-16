<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->id();
            $table->string('duNama', 50);
            $table->text('duFotoProfil')->nullable();
            $table->text('duAlamat')->nullable();
            $table->string('duKontak', 12)->nullable();
            $table->text('duDeskripsi')->nullable();
            $table->foreignId('duIdLapak')->nullable()->constrained('data_lapaks')->onUpdate('cascade')->onDelete('cascade');
            $table->string('duUsername', 50);
            $table->string('duPassword');
            $table->string('duEmail')->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('data_users');
    }
}
