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
                    'foto_link' => '/uploads/testimonies/Babette Geerkens.jpg',
                    'foto_beschrijving' => 'Foto van Babette Geerkens',
                    'project_id' => NULL,
                    'testimony_id' => 6,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Bram Bleux.jpg',
                    'foto_beschrijving' => 'Foto van Bram Bleux',
                    'project_id' => NULL,
                    'testimony_id' => 7,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Bram Geudens.jpg',
                    'foto_beschrijving' => 'Foto van Bram Geudens',
                    'project_id' => NULL,
                    'testimony_id' => 8,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Brent Van der Steen.jpg',
                    'foto_beschrijving' => 'Foto van Brent Van der Steen',
                    'project_id' => NULL,
                    'testimony_id' => 9,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Britt Ooms.jpg',
                    'foto_beschrijving' => 'Foto van Britt Ooms',
                    'project_id' => NULL,
                    'testimony_id' => 10,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Ehran Lenaerts.jpg',
                    'foto_beschrijving' => 'Foto van Ehran Lenaerts',
                    'project_id' => NULL,
                    'testimony_id' => 11,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Giedre Zalaite.jpg',
                    'foto_beschrijving' => 'Foto van Giedre Zalaite',
                    'project_id' => NULL,
                    'testimony_id' => 12,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Jeroen Weber.jpg',
                    'foto_beschrijving' => 'Foto van Jeroen Weber',
                    'project_id' => NULL,
                    'testimony_id' => 13,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Jorn Snoeks.jpg',
                    'foto_beschrijving' => 'Foto van Jorn Snoeks',
                    'project_id' => NULL,
                    'testimony_id' => 14,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Kaat Maes.jpg',
                    'foto_beschrijving' => 'Foto van Kaat Maes',
                    'project_id' => NULL,
                    'testimony_id' => 15,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Matthias Thijsen.jpg',
                    'foto_beschrijving' => 'Foto van Matthias Thijsen',
                    'project_id' => NULL,
                    'testimony_id' => 16,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Mattia Andronico.jpg',
                    'foto_beschrijving' => 'Foto van Mattia Andronico',
                    'project_id' => NULL,
                    'testimony_id' => 17,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Michiel Vandezande.jpg',
                    'foto_beschrijving' => 'Foto van Michiel Vandezande',
                    'project_id' => NULL,
                    'testimony_id' => 18,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Niels Baptist.jpg',
                    'foto_beschrijving' => 'Foto van Niels Baptist',
                    'project_id' => NULL,
                    'testimony_id' => 19,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Pepijn Wirges.jpg',
                    'foto_beschrijving' => 'Foto van Pepijn Wirges',
                    'project_id' => NULL,
                    'testimony_id' => 20,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Robbe Eyckmans.jpg',
                    'foto_beschrijving' => 'Foto van Robbe Eyckmans',
                    'project_id' => NULL,
                    'testimony_id' => 21,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Robin Van de Velde .jpg',
                    'foto_beschrijving' => 'Foto van Robin Van de Velde',
                    'project_id' => NULL,
                    'testimony_id' => 22,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Rustem Kamalidenov.jpg',
                    'foto_beschrijving' => 'Foto van Rustem Kamalidenov',
                    'project_id' => NULL,
                    'testimony_id' => 23,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Thiemo Cumps.jpg',
                    'foto_beschrijving' => 'Foto van Thiemo Cumps',
                    'project_id' => NULL,
                    'testimony_id' => 24,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Toon Staes.jpg',
                    'foto_beschrijving' => 'Foto van Toon Staes',
                    'project_id' => NULL,
                    'testimony_id' => 25,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Wilfer Spaepen.jpg',
                    'foto_beschrijving' => 'Foto van Wilfer Spaepen',
                    'project_id' => NULL,
                    'testimony_id' => 26,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Yannick Vandevenne.jpg',
                    'foto_beschrijving' => 'Foto van Yannick Vandevenne',
                    'project_id' => NULL,
                    'testimony_id' => 27,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '/uploads/testimonies/Yoni Praats.jpg',
                    'foto_beschrijving' => 'Foto van Yoni Praats',
                    'project_id' => NULL,
                    'testimony_id' => 28,
                ],
//                [
//                    'created_at' => Carbon::now(),
//                    'updated_at' => Carbon::now(),
//                    'foto_link' => '/uploads/testimonies/Test.jpg',
//                    'foto_beschrijving' => 'Foto van Test',
//                    'project_id' => NULL,
//                    'testimony_id' => 6,
//                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/1-Website IT Factory/Website IT Factory-1.jpg","uploads/projects/1-Website IT Factory/Website IT Factory-2.jpg","uploads/projects/1-Website IT Factory/Website IT Factory-3.jpg","","","",""]',
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
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/6-Camp2Camp/Camp2Camp-1.jpg","uploads/projects/6-Camp2Camp/Camp2Camp-2.jpg","","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Camp2Camp",
                    'project_id' => 6,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/7-Visitekaartjes robot/Visitekaartjes robot-1.jpg","uploads/projects/7-Visitekaartjes robot/Visitekaartjes robot-2.jpg","","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Visitekaartjes robot",
                    'project_id' => 7,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/8-Datacenter automatisation/Datacenter automatisation-1.jpg","uploads/projects/8-Datacenter automatisation/Datacenter automatisation-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Datacenter automatisation",
                    'project_id' => 8,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/9-WebCtrl student ondernemer/WebCtrl student ondernemer-1.jpg","uploads/projects/9-WebCtrl student ondernemer/WebCtrl student ondernemer-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van WebCtrl student ondernemer",
                    'project_id' => 9,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/10-Internet Of Things essentials/Internet Of Things essentials-1.jpg","uploads/projects/10-Internet Of Things essentials/Internet Of Things essentials-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Internet Of Things essentials",
                    'project_id' => 10,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/11-Keuzeproject Internet Of Things/Keuzeproject Internet Of Things-1.jpg","uploads/projects/11-Keuzeproject Internet Of Things/Keuzeproject Internet Of Things-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Keuzeproject Internet Of Things",
                    'project_id' => 11,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/12-Project Tech and Health/Project Tech and Health-1.jpg","uploads/projects/12-Project Tech and Health/Project Tech and Health-2.jpg","uploads/projects/12-Project Tech and Health/Project Tech and Health-3.jpg","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Project Tech and Health",
                    'project_id' => 12,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/13-Digital Innovation project portaal/Digital Innovation project portaal-1.jpg","uploads/projects/13-Digital Innovation project portaal/Digital Innovation project portaal-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Digital Innovation project portaal",
                    'project_id' => 13,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/14-Project KNX Smart Home/Project KNX Smart Home-1.jpg","uploads/projects/14-Project KNX Smart Home/Project KNX Smart Home-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Project KNX Smart Home",
                    'project_id' => 14,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/15-Disruptive tour Tel Aviv - ICE Cube/Disruptive tour Tel Aviv - ICE Cube-1.jpg","uploads/projects/15-Disruptive tour Tel Aviv - ICE Cube/Disruptive tour Tel Aviv - ICE Cube-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Disruptive tour Tel Aviv - ICE Cube",
                    'project_id' => 15,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/16-Vibus student ondernemer/Vibus student ondernemer-1.jpg","uploads/projects/16-Vibus student ondernemer/Vibus student ondernemer-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Vibus student ondernemer",
                    'project_id' => 16,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/17-Cordova - ICE connect app/Cordova - ICE connect app-1.png","uploads/projects/17-Cordova - ICE connect app/Cordova - ICE connect app-2.png","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Cordova - ICE connect app ",
                    'project_id' => 17,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/18-Mobile Development - Het museum/Mobile Development - Het museum-1.png","uploads/projects/18-Mobile Development - Het museum/Mobile Development - Het museum-2.png","uploads/projects/18-Mobile Development - Het museum/Mobile Development - Het museum-3.png","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Mobile Development - Het museum",
                    'project_id' => 18,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/19-Orientation project - LAN party/Orientation project - LAN party-1.png","uploads/projects/19-Orientation project - LAN party/Orientation project - LAN party-2.png","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van Oriëntation project - LAN party",
                    'project_id' => 19,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/20-PHP project - Alumni avond/PHP project - alumni avond-1.png","uploads/projects/20-PHP project - Alumni avond/PHP project - alumni avond-2.png","","","",""]',
                    'foto_beschrijving' => "Foto's over het project van PHP project - Alumni avond",
                    'project_id' => 20,
                    'testimony_id' => NULL,
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'foto_link' => '["uploads/projects/21-Smart Policing - Smart Selection & Training/Smart Policing - Smart Selection & Training-1.jpg","uploads/projects/21-Smart Policing - Smart Selection & Training/Smart Policing - Smart Selection & Training-2.jpg","","","",""]',
                    'foto_beschrijving' => "Foto's over de hackathon van Smart Policing - Smart Selection & Training",
                    'project_id' => 21,
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
