<?php
declare(strict_types=1);

namespace Massoterapia\ModuloLogin\Repositorios;

use usuariosModel;

class usuariosRepositorio extends usuariosModel
{
    protected $model;

    public function __construct(usuariosModel $model)
    {
        $this->model = $model;
    }


}