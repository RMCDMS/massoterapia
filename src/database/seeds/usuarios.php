<?php

use Illuminate\Database\Seeder;
use usuariosModel;

class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(usuariosModel::class)->create([
            'usu_nome' => 'Rafael',
            'usu_email' => 'rafael@email.com',
            'usu_cpf' => '04527450557',
            'usu_senha' => bcrypt('123456'),
        ]);
    }
}
