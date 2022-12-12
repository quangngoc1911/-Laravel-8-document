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
        Schema::create('vanban', function (Blueprint $table) {
            $table->id();
            $table->integer('IdAccountGui');
            $table->integer('IdLoaiVanBan');
            $table->text('TrichYeu');
            $table->integer('IdLichVuc');
            $table->integer('IdNam');
            $table->integer('IdCoQuanBanHanh');
            $table->text('NoiLuuBanHanhChinh');
            $table->text('SoBanPhatHanh');
            $table->integer('IdCapDoKhan');
            $table->integer('IdCapDoMat');
            $table->string('TenFile');
            $table->string('NguoiKy');
            $table->string('NguoiSoanThao');
            $table->integer('IdLanhDaoDuyetVanBanDen');
            $table->text('PhongBanSoanThao');
            $table->string('SoTrang');
            $table->integer('IdAccountNhan');
            $table->string('NgayGui');
            $table->string('NgayDuyet');
            $table->string('HanXuLy');
            $table->integer('TrangThaiGui');
            $table->integer('TrangThaiDen');
            $table->text('GhiChu');
            $table->text('NoiDungXuLy');
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
        Schema::dropIfExists('vanban');
    }
};