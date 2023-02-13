<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // POSTS:
        Schema::table('posts', function (Blueprint $table) {

            // VERSIONE 1:
            // $table -> bigInteger('person_id') ->unsigned();

            // $table  -> foreign('person_id')
            //         ->references('id')
            //         ->on('people');

            // VERSIONE 2 COMPATTA:
            $table  -> foreignId('person_id')
                    ->constrained();
        });

        // PERSON_DETAILS:
        Schema::table('person_details', function (Blueprint $table) {
            
            // qui uso versione 2:
            $table  -> foreignId('person_id')
                    ->constrained();
            
            // primary key rapporto 1to1:
            $table -> primary('person_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // CANCELLIAMO VINCOLI E COLONNE:
        // Schema::table('posts', function (Blueprint $table) {

        //     $table->dropForeign('posts_person_id_foreign');
        //     $table->dropColumn('person_id');
        // });

        // Schema::table('person_details', function (Blueprint $table) {
            
        //     $table->dropForeign('person_details_person_id_foreingn');
        //     $table->dropColumn('person_id');
        // });
    }
};
