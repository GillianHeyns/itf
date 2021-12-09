<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('foto_link');
            $table->string('foto_beschrijving')->nullable();

            //$table->foreignId('content_block_id');
            $table->foreignId('project_id')->nullable();
            $table->foreignId('testimony_id')->nullable();

            // Foreign key relation
            //$table->foreign('content_block_id')->references('id')->on('content_blocks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('testimony_id')->references('id')->on('testimonies')->onDelete('cascade')->onUpdate('cascade');
        });
        // Insert
        DB::table('photos')->insert(
            [
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Gillian Heyns.jpg',
                    'foto_beschrijving' => 'Foto van Gillian Heyns',
                    'project_id' => NULL,
                    'testimony_id' => 1,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Jonas Van Hove.jpg',
                    'foto_beschrijving' => 'Foto van Jonas Van Hove',
                    'project_id' => NULL,
                    'testimony_id' => 2,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Axl Kesters.jpg',
                    'foto_beschrijving' => 'Foto van Axl Kesters',
                    'project_id' => NULL,
                    'testimony_id' => 3,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Tobias Geyskens.jpg',
                    'foto_beschrijving' => 'Foto van Tobias Geyskens',
                    'project_id' => NULL,
                    'testimony_id' => 4,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Alex Coulon.jpg',
                    'foto_beschrijving' => 'Foto van Alex Coulon',
                    'project_id' => NULL,
                    'testimony_id' => 5,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Test.jpg',
                    'foto_beschrijving' => 'Foto van Test',
                    'project_id' => NULL,
                    'testimony_id' => 6,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/1-Website IT Factory/Website IT Factory-1.jpg","uploads/projects/1-Website IT Factory/Website IT Factory-2.jpg","","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van de IT Factory website",
                    'project_id' => 1,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/2-Too-Gather afvalsorteermachine/Too-Gather afvalsorteermachine-1.png","uploads/projects/2-Too-Gather afvalsorteermachine/Too-Gather afvalsorteermachine-2.png","","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van project Too-Gather, Afvalsorteermachine",
                    'project_id' => 2,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/3-GitLab for KCE/GitLab for KCE-1.jpg","uploads/projects/3-GitLab for KCE/GitLab for KCE-2.jpg","","","","",""]',
                    'foto_beschrijving' => "Foto's over het project GitLab voor KCE",
                    'project_id' => 3,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/4-Patient Zero/Patient Zero-1.jpg","uploads/projects/4-Patient Zero/Patient Zero-2.jpg","","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Patient Zero",
                    'project_id' => 4,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/5-Smart Policing - Smart Interaction/Smart Policing - Smart Interaction-1.jpg","uploads/projects/5-Smart Policing - Smart Interaction/Smart Policing - Smart Interaction-2.jpg","uploads/projects/5-Smart Policing - Smart Interaction/Smart Policing - Smart Interaction-3.jpg","uploads/projects/5-Smart Policing - Smart Interaction/Smart Policing - Smart Interaction-4.jpg","uploads/projects/5-Smart Policing - Smart Interaction/Smart Policing - Smart Interaction-5.jpg",""]',
                    'foto_beschrijving' => "Foto's over het project van Smart Policing - Smart Interaction",
                    'project_id' => 5,
                    'testimony_id' => NULL,
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
        Schema::dropIfExists('photos');
    }
}
