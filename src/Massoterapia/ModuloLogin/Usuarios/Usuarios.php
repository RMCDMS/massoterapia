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
        $tratar = $this->tratarEntrada($input);

        $save = $this->repositorio->save($tratar);

        return $save;
    }

    /**
     * Trazendo todos os dados.
     * @param array|null $input
     * @return array
     */
    public function all(array $input = null)
    {
        $all = $this->repositorio->getWhere();

        foreach ($all as $a) {
            $buscaTratada = $this->tratarSaida($a);
        }

        return $buscaTratada;
    }

    /**
     * Trazendo um dado específico com base no id.
     * @param $id
     * @return array
     */
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

    public function tratarEntrada($tratar)
    {
        $input = [
            'usu_nome' => $tratar['nome'],
            'usu_sexo' => $tratar['sexo'],
            'usu_email' => $tratar['email'],
            'usu_data_nascimento' => $tratar['dataNascimento'],
            'usu_cpf' => $tratar['cpf'],
            'usu_senha' => $tratar['senha']
        ];

        return $input;
    }

    /**
     * Tratando a saída dos dados para o front-end.
     * @param $tratar
     * @return array
     */
    public function tratarSaida($tratar)
    {
        $input = [
            'nome' => $tratar->usu_nome,
            'sexo' => $tratar->usu_sexo,
            'email' => $tratar->usu_email,
            'dataNascimento' => $this->tratarDataSaida($tratar->usu_data_nascimento),
            'cpf' => $this->mascaraCpf($tratar->usu_cpf, '###.###.###-##'),
            'createdAt' => $this->tratarDataSaida($tratar->created_at),
            'updatedAt' => $this->tratarDataSaida($tratar->updated_at),
        ];

        if (isset($tratar->usuarios_id)) {

            $input['idUsuario'] = $tratar->usuarios_id;
        }

        return $input;
    }

    /**
     * Validando a entrada de e-mail
     * @param $tratar
     * @return mixed
     */
    public function validarEmail($tratar)
    {
        $valida = filter_var($tratar, FILTER_VALIDATE_EMAIL);

        return $valida;
    }

    /**
     * Tratando a saida da data do formato americano para o brasileiro.
     * @param $data
     * @return false|string
     *
     */
    protected function tratarDataSaida($data)
    {
        if ($data == null) {
            return $data;
        }

        return date('d/m/Y', strtotime((string)$data));
    }

    /**
     * Mascara o cpf
     * obs: Pode Mascarar CNPJ, CPF, Data e qualquer outra coisa.
     * @param type $val
     * @param type $mask
     * @return type
     */
    protected function mascaraCpf($val, $mask)
    {
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] == '#') {
                if (isset($val[$k]))
                    $maskared .= $val[$k++];
            } else {
                if (isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }
}