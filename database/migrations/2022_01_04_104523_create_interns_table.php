<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->bigInteger('user_id');
            $table->string('gender');
            $table->string('phone');
            // $table->timestamp('verified_at');
            $table->timestamp('date_of_birth');
<<<<<<< Updated upstream:database/migrations/2022_01_04_104523_create_interns_table.php
            $table->bigInteger('address_id');
=======
            $table->string('area_of_interest');
>>>>>>> Stashed changes:database/migrations/2022_01_08_084044_create_interns_table.php
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
        Schema::dropIfExists('interns');
    }
}
