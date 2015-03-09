
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotersCastsCandidatesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voters', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('voter_name')->default('');
            $table->string('voter_id')->default('');
            $table->timestamps();
        });

        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidate_name')->default('');
            $table->string('symbol')->default('');
            $table->timestamps();
        });
        Schema::create('casts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voter_id')->default('');
            $table->string('symbol')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('voters');
        Schema::drop('casts');
        Schema::drop('candidates');
    }

}
