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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lender_user_id');

            $table->string('name');
            $table->string('image');

            $table->foreignId('store_id')->nullable();
            $table->foreignId('official_product_id');
            $table->enum('type', ['ring', 'necklace', 'bracelet', 'earring', 'other']);
            $table->text('detail')->nullable();
            $table->text('recommended_situation')->nullable();
            $table->text('recommended_matches')->nullable();
            $table->string('color', 20)->nullable();
            $table->string('material', 30)->nullable();
            $table->float('weight')->nullable();
            $table->float('length')->nullable();
            $table->string('serial_number');
            $table->integer('rental_price')->nullable();
            $table->integer('scratch_level')->nullable();
            $table->text('scratch_detail')->nullable();
            $table->boolean('is_case');
            $table->boolean('is_guarantee');
            $table->boolean('is_purchasable');
            $table->integer('soldable_price')->nullable();
            $table->integer('favorite_count');
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
        Schema::dropIfExists('products');
    }
};
