<?php

declare(strict_types=1);

namespace Massoterapia\System\Negocio;

interface INegocio
{
    public function save(array $input);

    public function all(array $input = null);

    public function find($id);

    public function update($id, array $input);

    public function delete($id);
}