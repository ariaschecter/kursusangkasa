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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('min_withdraw')->default(100000);
            $table->integer('presentase_admin')->default(40);
            $table->integer('presentase_teacher')->default(50);
            $table->integer('presentase_affiliate')->default(10);
            $table->integer('default_affiliate')->nullable();
            $table->string('no_phone')->nullable();
            $table->string('hero_image')->default('upload/home/hero_image.png');
            $table->string('banner_image')->default('upload/home/banner_image.jpg');
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
        Schema::dropIfExists('settings');
    }
};
