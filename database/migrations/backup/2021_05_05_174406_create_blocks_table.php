<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('priority')->nullable()->default(0);
            $table->string('code')->unique()->nullable();
            $table->string('prefix')->nullable();
            
            $table->nullableMorphs('belong');
            $table->nullableMorphs('ext');
            $table->bigInteger('int')->nullable();
            $table->string('string')->nullable();
            $table->bigInteger('content_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
