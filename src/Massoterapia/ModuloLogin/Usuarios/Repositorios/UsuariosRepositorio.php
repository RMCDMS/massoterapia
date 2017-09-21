<?php
declare(strict_types=1);

namespace Massoterapia\ModuloLogin\Usuarios\Repositorios;

use Illuminate\Database\Eloquent\Model;
use Massoterapia\ModuloLogin\Usuarios\Models\UsuariosModel;

class usuariosRepositorio extends UsuariosModel
{
    protected $model;

    public function __construct(UsuariosModel $model)
    {
        $this->model = $model;
//        parent::$model;
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
            'created_at',
            'updated_at'
        ];

        $dados = $this->model->select($campos)
            ->where('usuarios_id', '=', $id)
            ->first();

        return $dados;
    }

    public function getWhere(array $input = null)
    {
        $campos = [
            'usuarios_id',
            'usu_nome',
            'usu_sexo',
            'usu_email',
            'usu_data_nascimento',
            'usu_cpf',
            'usu_senha',
            'created_at',
            'updated_at'
        ];

        $dados = $this->model->select($campos)->get();

        return $dados;
    }
}