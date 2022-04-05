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
        Schema::create('product_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lender_user_id')->constraint();
            $table->foreignId('store_id')->constraint()->nullable();
            $table->string('official_product_id');
            $table->string('brand_name', 30);
            $table->string('name', 30);
            $table->enum('type', ['ring', 'necklace', 'bracelet', 'earing', 'other']);
            $table->string('image', 255);
            $table->text('story')->nullable();
            $table->text('scratch_detail')->nullable();
            $table->string('material', 30)->nullable();
            $table->string('serial_number');
            $table->boolean('is_case');
            $table->boolean('is_guarantee');
            $table->boolean('is_purchasable');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_requests');
    }
};
