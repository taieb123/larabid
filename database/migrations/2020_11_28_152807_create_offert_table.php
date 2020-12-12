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
            $table->float('prix_deb',8,2)->default(0);
            $table->float('prix_fin',8,2)->default(0);
            $table->integer('nbr_enchere');
            $table->integer('image')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->text('details')->nullable();
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
