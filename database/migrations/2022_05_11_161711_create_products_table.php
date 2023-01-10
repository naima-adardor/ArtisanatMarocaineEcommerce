
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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->string('designation')->nullable;
            $table->string('description')->nullable;
            $table->unsignedBigInteger('id_categ')->nullable;
            $table->unsignedBigInteger('id_promo')->nullable;
            $table->foreign('id_categ')->references('id_categ')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_promo')->references('id_promo')->on('promotions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('quantity')->nullable;
            $table->string('price')->nullable;
            $table->string('old_price')->nullable;
            $table->string('image')->nullable;
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
        Schema::dropIfExists('products');
    }
};


















