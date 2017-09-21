<?php

declare(strict_types=1);

namespace Massoterapia\ModuloLogin\Usuarios;

use Massoterapia\ModuloLogin\Usuarios\Repositorios\UsuariosRepositorio;
use Massoterapia\System\Negocio\INegocio;

class Usuarios implements INegocio
{

    protected $repositorio;

    public function __construct(UsuariosRepositorio $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function save(array $input)
    {
        // TODO: Implement save() method.
    }

    public function all(array $input = null)
    {
        $busca = $this->repositorio->getWhere();

        $buscaTratada = $this->tratarSaida($busca);

        foreach ($buscaTratada as $b) {
            dd($b->usu_nome);
        }

        return $buscaTratada;
    }

    public function find($id)
    {
        $busca = $this->repositorio->find($id);

        $buscaTratada = $this->tratarSaida($busca);

        return $buscaTratada;
    }

    public function update($id, array $input)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function tratarSaida($tratar)
    {
        $input = [
            'nome' => $tratar->usu_nome,
            'sexo' => $tratar->usu_sexo,
            'email' => $tratar->usu_email,
            'dataNascimento' => $tratar->usu_data_nascimento,
            'cpf' => $tratar->usu_cpf,
            'senha' => $tratar->usu_senha,
            'createdAt' => $tratar->created_at,
            'updatedAt' => $tratar->updated_at
        ];

        if (isset($tratar->usuarios_id)) {

            $input['idUsuario'] = $tratar->usuarios_id;
        }

        return $input;
    }

    public function validarEmail($tratar)
    {
        $valida = filter_var($tratar, FILTER_VALIDATE_EMAIL);

        return $valida;
    }
}