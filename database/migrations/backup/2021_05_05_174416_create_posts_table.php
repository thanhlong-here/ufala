<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('code')->unique()->nullable();
            $table->integer('priority')->nullable()->default(0);
            //$table->bigInteger('type_id')->nullable();// page
            $table->string('title')->nullable();
            $table->bigInteger('content_id')->nullable();
            $table->bigInteger('parent_id')->default(0);
            $table->bigInteger('avatar_id')->default(0);//block id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
