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
        Schema::create('course_acces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id');
            $table->foreignId('user_id');
            $table->integer('course_acces_last')->default(1);
            $table->date('course_acces_subscribe')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('course_acces');
    }
};
