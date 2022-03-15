<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternToInternshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intern_to_internship', function (Blueprint $table) {
            $table->unsignedBigInteger('intern_id')->nullable();
            $table->unsignedBigInteger('internship_id')->nullable();
            $table->timestamps();
            $table->primary(['intern_id','internship_id']);
        
            $table->foreign('intern_id')
            ->references('id')->on('interns')
            ->onDelete('cascade');

            $table->foreign('internship_id')
                ->references('id')->on('internships')
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
        Schema::dropIfExists('intern_to_internship');
    }
}
