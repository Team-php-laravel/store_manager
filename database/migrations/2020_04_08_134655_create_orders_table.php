<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->id();
            $table->boolean("trang_thai")->default(1);
            $table->float("tong_tien");
            $table->unsignedBigInteger("dat_ban_id");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();
        });

        Schema::table('hoa_don', function (Blueprint $table) {
            $table->foreign('dat_ban_id')->references('id')->on('dat_ban');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
}
