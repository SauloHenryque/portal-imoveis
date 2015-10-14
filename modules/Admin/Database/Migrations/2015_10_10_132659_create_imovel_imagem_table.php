<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelImagemTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_imagem', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('imovel_id')->unsigned();
            $table->string('descricao',255);
            $table->string('url',255);
            
            $table->foreign('imovel_id')
                    ->references('id')->on('imovel');
            
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
        Schema::drop('imovel_imagem');
    }

}
