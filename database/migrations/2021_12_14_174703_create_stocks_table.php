<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('symbol', 10);
            $table->string('name', 100);
            $table->string('exchange', 20);
            $table->string('currency', 10);
            $table->datetime('datetime');
            $table->double('open',10,2);
            $table->double('high',10,2);
            $table->double('low',10,2);
            $table->double('close',10,2);
            $table->bigInteger('volume');
            $table->double('previous_close',10,2);
            $table->double('change',10,2);
            $table->bigInteger('average_volume');
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
        Schema::dropIfExists('stocks');
    }
}
