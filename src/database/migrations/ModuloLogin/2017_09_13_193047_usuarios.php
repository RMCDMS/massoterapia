<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Criando migration em pasta específica.
     * php artisan make:migration nomeDaMigration --path=database/migrations/NomeDoDiretorio
     *
     * Gerando migrate em uma pasta específica.
     * php artisan migrate --path=database/migrations/NomeDoDiretorio --database=nomeDaConexao(Caso tenha multiplas conexoes)
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('usuarios_id');
            $table->string('usu_nome');
            $table->string('usu_sexo');
            $table->string('usu_email');
            $table->date('usu_data_nascimento');
            $table->string('usu_cpf');
            $table->string('usu_senha');
            $table->timestamps();
            $table->softDeletes();
//            $table->unsignedInteger('cod_perfis');
//
//            $table->index('cod_perfis', 'usuarios_cod_perfis_idx');
//
//            $table->foreign('cod_perfis', 'fk_usuarios_cod_perfis')->references('perfis_id')->on('perfis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
