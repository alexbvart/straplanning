<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemfodasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemfodas', function (Blueprint $table) {
            $table->id();

            $table->text('description');

            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')
                    ->references('id')
                    ->on('projects')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                    
            $table->unsignedBigInteger('tipoitem_id');
            $table->foreign('tipoitem_id')
                    ->references('id')
                    ->on('tipoitems')
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
        Schema::dropIfExists('itemfodas');
    }
}
