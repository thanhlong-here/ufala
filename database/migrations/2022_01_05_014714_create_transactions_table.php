<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('prefix')->nullable();
            $table->string('code')->unique()->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('in');
            $table->bigInteger('out');
            $table->mediumText('note');
            $table->bigInteger('account_id');
            $table->string('status')->default('closed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
