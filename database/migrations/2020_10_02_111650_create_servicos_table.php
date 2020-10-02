<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
  
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->float('valor');
            $table->timestamps();          
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
