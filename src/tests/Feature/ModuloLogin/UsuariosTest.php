<?php

use Massoterapia\ModuloLogin\Usuarios\Usuarios;
use Massoterapia\ModuloLogin\Usuarios\Repositorios\UsuariosRepositorio;
use Massoterapia\ModuloLogin\Usuarios\Models\UsuariosModel;
use Tests\TestCase;

class UsuariosTest extends TestCase
{
    protected $negocio;

    public function criarObjeto()
    {
        $this->negocio = new usuarios(new UsuariosRepositorio(new UsuariosModel()));
    }

    /**
     * @group usuariosFind
     */
    public function testTrazendoApenasUmUsuario()
    {
        $this->criarObjeto();

        $id = 1;

        $find = $this->negocio->find($id);

        dd($find);
    }

    /**
     * @group usuariosAll
     */
    public function testTrazendoTodosOsDados()
    {
        $this->criarObjeto();

        $busca = $this->negocio->all();

//        dd($busca);
    }

}