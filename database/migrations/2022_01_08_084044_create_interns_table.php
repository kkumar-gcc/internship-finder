<?php

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
            $table->id();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('gender');
            $table->string('phone');
            $table->date('date_of_birth');
            $table->string('area_of_interest');
            $table->string('profile_image');
            $table->enum('status',['Not Active','Active'])->default('Not Active');
            $table->timestamps();

            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('cascade');
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
