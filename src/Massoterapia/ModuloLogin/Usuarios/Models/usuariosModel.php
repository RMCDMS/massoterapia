<?php
declare(stricts_types=1);

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable;

class usuariosModel extends Model
{

    protected $table = 'usuarios';

    protected $primaryKey = 'usuarios_id';

    protected $fillable = [
        'usu_nome',
        'uso_sexo',
        'usu_email',
        'usu_data_nascimento',
        'usu_cpf',
        'usu_senha',
    ];

    use softDeletes;
    protected $dates = ['deleted_at'];

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
//    public function perfil()
//    {
//        return $this->hasOne('Massoterapia\ModuloLogin\Usuarios\Models\perfisModel','cod_perfis','perfis_id');
//    }
}