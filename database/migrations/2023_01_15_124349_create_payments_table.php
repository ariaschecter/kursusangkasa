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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_ref');
            $table->foreignId('user_id');
            $table->foreignId('course_id');
            $table->foreignId('payment_method_id');
            $table->integer('payment_price');
            $table->string('payment_picture');
            $table->string('payment_status')->default('PENDING'); // Pending, Done, Cancel
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
        Schema::dropIfExists('payments');
    }
};
