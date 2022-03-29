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
            $table->foreignId('renter_user_id')->constraint();
            $table->foreignId('lender_user_id')->constraint();
            $table->foreignId('product_id')->constraint();
            $table->enum('on_where', ['lender', 'us', 'renter']);
            $table->boolean('is_cleaning');
            $table->boolean('is_fixing');
            $table->text('fix_detail')->nullable();
            $table->boolean('is_lost');
            $table->text('lost_detail')->nullable();
            $table->timestamps();
            // $table->timestampTz('start_rentaling_at')->nullable();
            $table->dateTime('user_received_at')->nullable();
            $table->dateTime('send_to_us_at')->nullable();
            $table->dateTime('we_received_at')->nullable();
            $table->dateTime('send_to_lender_at')->nullable();
            $table->dateTime('return_complete_at')->nullable();
            $table->dropColumn('updated_at');
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
