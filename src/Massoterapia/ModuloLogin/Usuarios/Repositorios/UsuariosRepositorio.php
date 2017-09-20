<?php
declare(strict_types=1);

namespace Massoterapia\ModuloLogin\Usuarios\Repositorios;

use Massoterapia\ModuloLogin\Usuarios\Models\UsuariosModel;

class usuariosRepositorio extends UsuariosModel
{
    protected $model;

    public function __construct(UsuariosModel $model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        $campos = [
            'usuarios_id',
            'usu_nome',
            'usu_sexo',
            'usu_email',
            'usu_data_nascimento',
            'usu_cpf',
            'usu_senha',
        ];

        $dados = $this->model->select($campos)
            ->where('usuarios_id','=',$id)
            ->first();

        return $dados;

    }
}