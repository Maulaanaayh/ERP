<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesmen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('no_telp', $length = 12);
            $table->integer('city_id');
            $table->string('code_referral', $length = 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesmen');
    }
}
