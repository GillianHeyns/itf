<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('project_id')->nullable();
            $table->foreignId('tag_id')->nullable();

            // Foreign key relation
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');
        });
        // Insert
        DB::table('project_tags')->insert(
            [
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 1,
                    'tag_id' => 5
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 1,
                    'tag_id' => 2
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 2,
                    'tag_id' => 3
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 2,
                    'tag_id' => 5
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 3,
                    'tag_id' => 5
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 4,
                    'tag_id' => 6
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 4,
                    'tag_id' => 3
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 5,
                    'tag_id' => 6
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 5,
                    'tag_id' => 4
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 6,
                    'tag_id' => 5
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 7,
                    'tag_id' => 5
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 8,
                    'tag_id' => 5
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 8,
                    'tag_id' => 4
                ],
                [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'project_id' => 9,
                'tag_id' => 8
                ],
                [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'project_id' => 9,
                'tag_id' => 2
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 10,
                    'tag_id' => 7
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 11,
                    'tag_id' => 7
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 12,
                    'tag_id' => 8
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 13,
                    'tag_id' => 5
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 14,
                    'tag_id' => 7
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 15,
                    'tag_id' => 8
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 16,
                    'tag_id' => 8
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 17,
                    'tag_id' => 2
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 18,
                    'tag_id' => 2
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 19,
                    'tag_id' => 4
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 20,
                    'tag_id' => 2
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 21,
                    'tag_id' => 4
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'project_id' => 21,
                    'tag_id' => 6
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
        Schema::dropIfExists('project_tags');
    }
}
