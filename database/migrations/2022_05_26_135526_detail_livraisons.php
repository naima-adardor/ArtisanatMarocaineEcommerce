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
        Schema::create('detail_livraisons', function (Blueprint $table) {
            $table->id( 'id_detailLivraison');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string('lastName');
            $table->string('firstName');
            $table->string('city');
            $table->string('country');
            $table->string('adresse');
            $table->string('zipCode');
            $table->integer('Numero');
            $table->string('email');

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
        Schema::dropIfExists('detail_livraisons');
    }
};
