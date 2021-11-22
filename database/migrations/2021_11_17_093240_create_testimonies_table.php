<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('testimony_tekst');
            $table->string('testimony_studentnaam')->nullable();
            $table->string('testimony_studierichting')->nullable();
            $table->year('testimony_jaar')->nullable();
<<<<<<< HEAD:database/migrations/2021_11_17_093240_create_testimonies_table.php
//            $table->foreignId('content_block_id');
//            $table->foreign('content_block_id')->references('id')->on('content_blocks')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->string('file_path')->nullable();
>>>>>>> 0c4c0f02732a2883dbc1201b9153a11d2c036f66:database/migrations/2021_11_17_093259_create_testimonies_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonies');
    }
}
