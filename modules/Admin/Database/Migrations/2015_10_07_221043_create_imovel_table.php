<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nome',255);
            $table->text('descricao');
            $table->decimal('valor',15,2);
            
            $table->timestamps();
            $table->softDeletes('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imovel');
    }

}
