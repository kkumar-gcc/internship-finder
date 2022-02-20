<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposels', function (Blueprint $table) {
            $table->id();
            $table->text('reason');
            $table->string('available_time');
            $table->unsignedBigInteger('intern_id')->nullable();     
            $table->unsignedBigInteger('internship_id')->nullable();
            $table->timestamps();

            $table->foreign('internship_id')
            ->references('id')->on('internships')
            ->onDelete('cascade');

            $table->foreign('intern_id')
            ->references('id')->on('interns')
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
        Schema::dropIfExists('proposels');
    }
}
