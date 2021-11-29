<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonyTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimony_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('tag_id');
            $table->foreignId('testimony_id');

            // Foreign key relation
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('testimony_id')->references('id')->on('testimonies')->onDelete('cascade')->onUpdate('cascade');
        });
        // Insert
        DB::table('testimony_tags')->insert(
            [
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 5,
                    'testimony_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 5,
                    'testimony_id' => 2
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 5,
                    'testimony_id' => 3
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 5,
                    'testimony_id' => 4
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 4,
                    'testimony_id' => 5
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimony_tags');
    }
}
