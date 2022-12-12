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
        Schema::create('danhmucdi', function (Blueprint $table) {
            $table->id();
            $table->string('TenDanhMucDi');
            $table->string('KyHieu');
            $table->string('SoDiHienTai');
            $table->string('DoUuTien');
            $table->integer('IdLoaiVanBan');
            $table->string('TrangThai');
            $table->string('Reset');
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
        Schema::dropIfExists('danhmucdi');
    }
};