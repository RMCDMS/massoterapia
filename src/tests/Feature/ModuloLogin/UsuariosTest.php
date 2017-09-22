<?php

use Massoterapia\ModuloLogin\Usuarios\Usuarios;
use Massoterapia\ModuloLogin\Usuarios\Repositorios\UsuariosRepositorio;
use Massoterapia\ModuloLogin\Usuarios\Models\UsuariosModel;
use Tests\TestCase;

class UsuariosTest extends TestCase
{

    /**
     * @var Usuarios
     */
    protected $negocio;

    public function criarObjeto()
    {
        $this->negocio = new Usuarios(new UsuariosRepositorio(new UsuariosModel()));
    }

    /**
     * @group usuariosFind
     */
    public function testTrazendoApenasUmUsuario()
    {
        $this->criarObjeto();

        $id = 1;

        $find = $this->negocio->find($id);

        $this->assertInternalType('array', $find);
        $this->assertNotEmpty($find);
        $this->assertNotNull($find);
    }

    /**
     * @group usuariosAll
     */
    public function testTrazendoTodosOsDados()
    {
        $this->criarObjeto();

        $all = $this->negocio->all();

        $this->assertInternalType('array', $all);
        $this->assertNotEmpty($all);
        $this->assertNotNull($all);
    }

    /**
     * @group usuariosSave
     */
    public function testSalvandoDadosDoUsuario()
    {
        $this->criarObjeto();

        $input= [
            'nome' => "Jeremias GG",
            'sexo' => 'm',
            'email' => 'jeremias@email.com',
            'dataNascimento' => '1990-04-22',
            'cpf' => '04527450557',
            'senha' => '123456'
        ];

        $this->negocio->save($input);
    }

}