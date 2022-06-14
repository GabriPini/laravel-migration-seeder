<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('commercial_name', 50);
            $table->string('country', 20);
            $table->string('region', 20);
            $table->string('city', 30);
            $table->string('period', 20);
            $table->text('description');
            $table->decimal('price', 7, 2)->unsigned();
            $table->boolean('all_inclusive');
            $table->smallInteger('seats')->unsigned();
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
        Schema::dropIfExists('places');
    }
}
