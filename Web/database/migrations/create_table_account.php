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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('accounts_id');
            $table->string('HoVaTen');
            $table->string('TenDN')->unique();
            $table->string('password');
            $table->string('Role')->nullable();
            $table->integer('IdChucVu')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Nhom')->nullable();
            $table->integer('IdDiaChiCongTac')->nullable();
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
        Schema::dropIfExists('accounts');
    }
};