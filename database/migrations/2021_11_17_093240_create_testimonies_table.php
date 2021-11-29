<?php

use Carbon\Carbon;
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
            $table->string('file_path')->nullable();

//            $table->foreignId('content_block_id');
//            $table->foreign('content_block_id')->references('id')->on('content_blocks')->onDelete('cascade')->onUpdate('cascade');

        });
        // Insert
        DB::table('testimonies')->insert(
            [
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'ITF Student Gillian Heyns',
                    'testimony_studentnaam' => 'Gillian Heyns',
                    'testimony_studierichting' => "3DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Gillian Heyns.jpg",
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'ITF Student Jonas Van Hove',
                    'testimony_studentnaam' => 'Jonas Van Hove',
                    'testimony_studierichting' => "3DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Jonas Van Hove.jpg",
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'ITF Student Axl Kesters',
                    'testimony_studentnaam' => 'Axl Kesters',
                    'testimony_studierichting' => "3DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Axl Kesters.jpg",
//                    'content_block_id' => 1
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
        Schema::dropIfExists('testimonies');
    }
}
