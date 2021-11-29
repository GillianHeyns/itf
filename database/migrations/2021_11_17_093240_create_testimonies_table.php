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
//            $table->string('testimony_tekst');
            $table->longText('testimony_tekst');
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
                    'testimony_tekst' => 'In de afstudeerrichting Digital Innovation krijgen we heel veel mogelijkheden om samen te werken met verschillende IT-bedrijven en partners. Zo leren we de jobs al een beetje kennen waardoor we later zeker weten wat we willen doen.',
                    'testimony_studentnaam' => 'Gillian Heyns',
                    'testimony_studierichting' => "3 DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Gillian Heyns.jpg",
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Digital Innovation is dé richting voor mensen die graag projectmatig bijleren. Je hebt zelf de keuze waar je je focus legt, zowel bij de vakken die je volgt als de projecten die je doet gedurende het semester. Heb je een hands-on-mentaliteit? Overweeg dan zeker deze richting!',
                    'testimony_studentnaam' => 'Jonas Van Hove',
                    'testimony_studierichting' => "3 DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Jonas Van Hove.jpg",
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Als student met functie beperking was een hoge school geen makkelijke keuze. De ITFactory was mijn keuze en hier heb ik nooit spijt van gehad. Van dag één heb ik alle nodige hulp gekregen van medestudenten en docenten om het voor mij zo aangenaam mogelijk te maken!',
                    'testimony_studentnaam' => 'Axl Kesters',
                    'testimony_studierichting' => "3 DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Axl Kesters.jpg",
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'DI laat me toe om als student met een brede interesse in IT toch vakken van de verschillende richtingen te volgen. Via het projectwerk leer ik ook alle stappen kennen die een project doorloopt, vanaf het opstellen van de verwachting van de klant tot oplevering van het eindresultaat. Het uitwerken van projecten heeft me ook al toegelaten om contacten te leggen binnen de bedrijfswereld. Een echte aanrader dus voor degene die al eens willen proeven hoe het er aan toe gaat in het echte bedrijfsleven.',
                    'testimony_studentnaam' => 'Tobias Geyskens',
                    'testimony_studierichting' => "2 DI",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Tobias Geyskens.jpg",
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Sinds de eerste dagen in de ITfactory voel ik me hier al welkom, het is meer dan een studierichting. Het is een vriendengroep, een leergroep en na de schooluren zelfs je game groep. Binnen de ITfactory ben je niet 1 van de vele studenten, je bent jezelf, je word herkend & erkend.',
                    'testimony_studentnaam' => 'Alex Coulon',
                    'testimony_studierichting' => "2 CCS",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Alex Coulon.jpg",
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Test',
                    'testimony_studentnaam' => 'Test',
                    'testimony_studierichting' => "Test",
                    'testimony_jaar' => "2000",
                    'file_path' => "/uploads/testimonies/Anonym.jpg",
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
