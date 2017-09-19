<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perfis extends Migration
{
    /**
     * Criando migration em pasta específica.
     * php artisan make:migration nomeDaMigration --path=database/migrations/NomeDoDiretorio
     *
     * Gerando migration em uma pasta específica.
     * php artisan migrate --path=database/migrations/NomeDoDiretorio --database=nomeDaConexao(Caso tenha multiplas conexoes)
     */
    public function up()
    {
        Schema::create('perfis', function (Blueprint $table) {
            $table->increments('perfis_id');
            $table->string('per_descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfis');
    }
}
