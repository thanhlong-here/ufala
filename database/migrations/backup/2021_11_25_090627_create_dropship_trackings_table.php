<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropshipTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropship_trackings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code')->nullable()->default(0);
            $table->string('prefix')->nullable();
            $table->string('code')->unique()->nullable();
            $table->string('title')->nullable();
            $table->bigInteger('content_id')->nullable();
            $table->bigInteger('parent_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dropship_trackings');
    }
}
