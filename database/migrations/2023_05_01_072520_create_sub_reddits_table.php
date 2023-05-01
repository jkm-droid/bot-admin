<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubRedditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_reddits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bot_id');
            $table->string('name');
            $table->boolean('is_extracted')->default(0);
            $table->boolean('is_locked')->default(0);
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
        Schema::dropIfExists('sub_reddits');
    }
}
