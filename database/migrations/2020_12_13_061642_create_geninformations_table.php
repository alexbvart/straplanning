<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeninformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geninformations', function (Blueprint $table) {
            $table->id();

            $table->text('mission');
            $table->text('vision');
            $table->text('valueProposition');
            $table->text('differentiatingFactor');
            $table->unsignedBigInteger('project_id')->unique();
            $table->foreign('project_id')
                    ->references('id')
                    ->on('projects')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

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
        Schema::dropIfExists('geninformations');
    }
}
