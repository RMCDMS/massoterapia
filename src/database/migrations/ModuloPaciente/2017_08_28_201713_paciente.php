<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Paciente extends Migration
{
    /**
     * Criando migration em pasta específica
     * php artisan make:migration nomeDaMigration --path=database/migrations/NomeDoDiretorio
     *
     * Gerando migrate em uma pasta específica
     * php artisan migrate --path=database/migrations/NomeDoDiretorio --database=nomeDaConexao(Caso tenha multiplas conexoes)
     */
    public function up()
    {
        Schema::table('paciente', function (Blueprint $table) {
            $table->increments('paciente_id');
            $table->string('pac_nome');
            $table->string('pac_identidade');
            $table->string('pac_email');
            $table->string('pac_nascimento');
            $table->string('pac_sexo');
            $table->timestamp();
            $table->softDeletes();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
