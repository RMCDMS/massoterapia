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
        // TODO: Implement all() method.
    }

    public function find($id)
    {
        $find = $this->repositorio->find($id);
        return $find;
    }

    public function update($id, array $input)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}