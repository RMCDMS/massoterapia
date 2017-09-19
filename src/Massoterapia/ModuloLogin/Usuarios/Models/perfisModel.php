<?php
declare(strict_types=1);

namespace Massoterapia\ModuloLogin\Usuarios\Models;

use \Illuminate\Database\Eloquent\Model;

class perfisModel extends Model
{
    protected $table = 'perfis';

    protected $primaryKey = 'perfis_id';

    protected $fillable = [
        'per_descricao'
    ];

    public $timestamps = false;

    /**
     * hasone - um para um
     * obs: Não precisa de link relacionado a outra tabela.
     * Utiliza se na model que não tem Chave estrangeira
     *
     * belongsto - Um para um
     * obs: Precisa de um link relacionado com a outra tabela.
     * Utiliza na model que tem chave estrangeira
     *
     * hasmany - um para muitos
     * belonstomany - muitos para muitos
     */
//    public function usuarios()
//    {
//        return $this->hasMany('Massoterapia\ModuloLogin\Usuarios\Models\usuariosModel');
//    }

}