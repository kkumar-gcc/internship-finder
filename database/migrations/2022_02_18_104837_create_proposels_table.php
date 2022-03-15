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
            $table->enum('status', ['Applied', 'Apply', 'Active','Rejected','Blocked'])->default('Apply');
            
            $table->foreignId('intern_id')
                ->nullable()
                ->constrained('interns')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('internship_id')
                ->nullable()
                ->constrained('internships')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('proposels');
    }
}
