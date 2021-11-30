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
                    'tag_id' => 2
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
