<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titel');
            $table->string('beschrijving')->nullable();
            $table->string('file_path')->nullable();
//            $table->foreignId('content_block_id');
//            $table->foreign('content_block_id')->references('id')->on('content_blocks')->onDelete('cascade')->onUpdate('cascade');
        });

        // Insert some users (inside the up-function!)
        DB::table('projects')->insert(
            [
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'ITF Website',
                    'beschrijving' => 'Website voor de IT Factory',
                    'file_path' => "testURL",
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Afvalsorteermachine',
                    'beschrijving' => 'Het belang van afvalsortering',
                    'file_path' => "testURL2",
//                    'content_block_id' => 2
                ]
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
        Schema::dropIfExists('projects');
    }
}
