<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_undangan',27);
            $table->string('no_registrasi',27);
            $table->string('username',50);
            $table->string('password',225);
            $table->string('no_ktp',16);
            $table->string('nama',200);
            $table->date('tgl_lahir');
            $table->string('ahli_waris',150);
            $table->string('hubungan',150);
            $table->string('no_hp',20);
            $table->string('alamat',225);
            $table->string('kota',150);
            $table->string('provinsi',150);
            $table->string('no_rek_dana',20);
            $table->string('foto_ktp',200);
            $table->string('foto_selfie',200);
            // $table->string('name', 255)->nullable();
            // $table->string('introduction', 500)->nullable();
            // $table->string('location', 255)->nullable();
            // $table->decimal('cost', 22)->nullable()->default(0.00);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
