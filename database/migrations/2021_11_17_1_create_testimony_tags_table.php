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
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 2,
                    'testimony_id' => 6
                ],
//                [
//                    'created_at' => Carbon::now(),
//                    'updated_at' => Carbon::now(),
//                    'tag_id' => 3,
//                    'testimony_id' => 6
//                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 9,
                    'testimony_id' => 7
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 4,
                    'testimony_id' => 8
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 11,
                    'testimony_id' => 9
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 7,
                    'testimony_id' => 9
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 2,
                    'testimony_id' => 10
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 10,
                    'testimony_id' => 11
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 10,
                    'testimony_id' => 12
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 7,
                    'testimony_id' => 13
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 11,
                    'testimony_id' => 14
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 2,
                    'testimony_id' => 14
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 11,
                    'testimony_id' => 15
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 4,
                    'testimony_id' => 15
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 3,
                    'testimony_id' => 16
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 11,
                    'testimony_id' => 17
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 3,
                    'testimony_id' => 17
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 2,
                    'testimony_id' => 18
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 3,
                    'testimony_id' => 19
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 7,
                    'testimony_id' => 20
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 9,
                    'testimony_id' => 21
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 7,
                    'testimony_id' => 22
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 10,
                    'testimony_id' => 23
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 7,
                    'testimony_id' => 24
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 2,
                    'testimony_id' => 25
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 2,
                    'testimony_id' => 26
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 4,
                    'testimony_id' => 27
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 11,
                    'testimony_id' => 28
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'tag_id' => 7,
                    'testimony_id' => 28
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
