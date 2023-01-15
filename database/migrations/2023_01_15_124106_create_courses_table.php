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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id');
            $table->foreignId('category_id');
            $table->string('course_name');
            $table->string('course_slug');
            $table->string('course_picture');
            $table->text('course_desc');
            $table->integer('price_old');
            $table->integer('price_new');
            $table->integer('admin_percentage');
            $table->integer('teacher_percentage');
            $table->integer('affiliate_percentage');
            $table->integer('course_enroll')->default(0);
            $table->integer('course_subscribe')->nullable(); // Day
            $table->string('course_active');
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
        Schema::dropIfExists('courses');
    }
};
