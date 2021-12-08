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
            $table->longText('beschrijving')->nullable();
//            $table->foreignId('content_block_id');
//            $table->foreign('content_block_id')->references('id')->on('content_blocks')->onDelete('cascade')->onUpdate('cascade');
        });

        // Insert some projects (inside the up-function!)
        DB::table('projects')->insert(
            [
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Website IT Factory',
                    'beschrijving' => 'Studenten Digital Innovation kregen de opdracht om op 3 weken tijd een volledig nieuwe website te ontwikkelen. De opdracht was niet enkel om een website te bouwen maar ook om nieuwe zaken bij te leren. Zo leerden ze onder andere werken met Laravel, php, jquery,… Daarnaast zijn ze nog volop bezig om een bot te installeren die ze later kunnen gebruiken in de website.',
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Too-Gather afvalsorteermachine',
                    'beschrijving' => 'We kregen via de Efteling de opdracht om een afvalscheidingstechniek te ontwikkelen voor Holle Bolle Gijs. Deze opdracht is in het kader van een wedstrijd en in samenwerking met ICE Cube, het beste prototype wordt werkelijk uitgevoerd in het pretpark.

Het afval komt langs de mond van Holle Bolle Gijs binnen en het valt op een transportband. daarna detecteert een sensor het afval en wordt er een foto gemaakt en naar de cloud gestuurd. Het afval wordt herkend, en het sorteermechanisme gaat het afval in de juiste afvalcontainer deponeren.',
                    //'file_path' => "testURL2",
//                    'content_block_id' => 2
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'GitLab for KCE',
                    'beschrijving' => 'De studenten van Digital Innovation kregen de opdracht een GitLab op te zetten voor KCE. Dit zou de werking van hun project ten goede komen.',
                    //'file_path' => "testURL3",
//                    'content_block_id' => 3
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Patient Zero',
                    'beschrijving' => 'De opdracht kon niet meer visionair zijn. Tussen 30 januari en 1 Februari 2020 deed een groep 1ITF studenten mee aan de hackathon Patiënt zero. De opdracht: zoek online naar datasets over ziektes en verspreidingspatronen en tracht te achterhalen waar de ziekte uiteindelijk begonnen is. Gezien de huidige corona pandemie kon dit geen actuelere opdracht zijn...

Hoewel de technologie nieuw was, was het team eerstejaars toch sterk genoeg om een mooie 2de plaats in de wacht te slepen!',
                    //'file_path' => "testURL3",
//                    'content_block_id' => 3
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Smart Policing – Smart Interaction',
                    'beschrijving' => 'Hoe brengen we de politie en de burger terug dichter bij elkaar? Dit was de opdracht die een team 2ITF studenten aannam op de ‘Smart Policing’ hackathon. Puttend uit hun eigen leefwereld en ervaring kozen ze ervoor om een app te ontwikkelen waardoor jongeren op een laagdrempelige manier problemen kunnen doorgeven aan de politie.

Thema’s als seksueel misbruik, pesten of drugsmisbruik werden niet uit de weg gegaan, want ambitieus als ze zijn wilden onze studenten net die moeilijke eerste stap bij deze topics vergemakkelijken.

Hun knappe teamwerk en de app genaamd ‘Okay’ viel op bij de jury en bezorgde dit team de eerste prijs in de discipline.',
                    //'file_path' => "testURL3",
//                    'content_block_id' => 3
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
        Schema::dropIfExists('projects');
    }
}
