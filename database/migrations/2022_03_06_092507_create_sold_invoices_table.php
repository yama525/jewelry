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
        Schema::create('sold_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constraint();
            $table->foreignId('product_id')->constraint();
            $table->string('product_name');
            $table->integer('total_price');
            $table->float('tax');
            $table->integer('used_point');
            $table->timestamp('payed_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sold_invoices');
    }
};
