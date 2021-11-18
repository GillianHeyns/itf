<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentOnPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_on_pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('page_id');
            $table->foreignId('content_block_id');

            // Foreign key relation
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('content_block_id')->references('id')->on('content_blocks')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_on_pages');
    }
}
