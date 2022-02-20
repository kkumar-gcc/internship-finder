<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            
            $table->unsignedBigInteger('address_id')->nullable();
            $table->string('organization_name');
            $table->string('organization_phone');
            // $table->timestamp('verified_at');
            $table->timestamps();

            // $table->foreign('user_id')
            //     ->references('id')->on('users')
            //     ->onDelete('cascade');

            // $table->foreign('address_id')
            //     ->references('id')->on('addresses')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
