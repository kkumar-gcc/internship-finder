<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')
                ->nullable()
                ->constrained('organizations')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('title');
            $table->text('description');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('category');
            $table->string('internship_type');
            $table->string('designation');
            $table->float('salary');
            $table->string('qualification');
            $table->string('skills');
            $table->date('lastdate');
            $table->string('location');
            $table->string('city');
            $table->string('zipcode');
            // $table->string('country');
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
        Schema::dropIfExists('internships');
    }
}
