<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offert', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('prix_dev',8,2)->default(0);
            $table->float('prix_fin',8,2)->default(0);
            $table->integer('nbr_enchere');
            $table->dateTime('start_date',0);
            $table->dateTime('end_date',0);
            $table->foreignId('id_subcategory')->nullable();
            $table->foreignId('id_details')->nullable();
            $table->foreign('id_subcategory')->references('id')->on('subcategory');
            $table->foreign('id_details')->references('id')->on('details');

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
        Schema::dropIfExists('offert');
    }
}
