<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Official;


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
            $table->foreignId('lender_user_id')->constraint();
            $table->foreignId('store_id')->constraint()->nullable();
            $table->string('official_product_id');
            $table->foreignId('subscription_plan_id')->constraint();
            $table->enum('type', ['ring', 'necklace', 'bracelet', 'earing', 'other']);
            $table->text('detail')->nullable();
            $table->text('recommended_situation')->nullable();
            $table->text('recommended_matches')->nullable();
            $table->string('stone', 40)->nullable();
            $table->string('material', 30)->nullable();
            $table->float('weight')->nullable();
            // $table->float('length')->nullable();
            $table->string('serial_number');
            $table->integer('scratch_level')->nullable();
            $table->text('scratch_detail')->nullable();
            $table->integer('status');
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
