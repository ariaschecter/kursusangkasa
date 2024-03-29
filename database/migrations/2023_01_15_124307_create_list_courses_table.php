<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_courses', function (Blueprint $table) {
            $table->id();
            $table->string('list_course_slug');
            $table->foreignId('course_id');
            $table->foreignId('sub_course_id');
            $table->string('list_course_name');
            $table->string('list_course_link');
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
        Schema::dropIfExists('list_courses');
    }
};
