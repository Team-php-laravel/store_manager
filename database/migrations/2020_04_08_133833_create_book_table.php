<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_ban', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tang_id");
            $table->integer("so_ban_dat");
            $table->datetime("thoi_gian_dat");
            $table->string("nguoi_dat");
            $table->string("so_dien_thoai");
            $table->boolean("trang_thai")->default(1);
            $table->timestamps();
        });

        Schema::table('dat_ban', function (Blueprint $table) {
            $table->foreign('tang_id')->references('id')->on('tang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_ban');
    }
}
