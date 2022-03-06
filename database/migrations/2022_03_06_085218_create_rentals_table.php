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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rentaling_user_id');
            $table->foreignId('lender_user_id');
            $table->foreignId('product_id');
            $table->enum('on_where', ['lender', 'us', 'renter']);
            $table->boolean('is_cleaning');
            $table->boolean('is_fixing');
            $table->text('fix_detail')->nullable();
            $table->boolean('is_lost');
            $table->text('lost_detail')->nullable();
            $table->timestamp('start_rentaling_at');
            $table->dateTime('user_received_at')->nullable();
            $table->dateTime('send_to_us_at')->nullable();
            $table->dateTime('we_received_at')->nullable();
            $table->dateTime('send_to_lender_at')->nullable();
            $table->dateTime('return_complete_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
};
