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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->string('HoVaTen');
            $table->string('TenDN')->unique();
            $table->string('Passwords');
            $table->string('Role');
            $table->integer('IdChucVu');
            $table->string('Phone');
            $table->string('Nhom');
            $table->integer('IdDiaChiCongTac');
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
        Schema::dropIfExists('account');
    }
};