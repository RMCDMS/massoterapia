<?php
declare(strict_types=1);

namespace Massoterapia\ModuloLogin\Usuarios\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuariosModel extends Authenticatable
{
    use Notifiable;
    use softDeletes;

    protected $table = 'usuarios';

    protected $primaryKey = 'usuarios_id';

    protected $fillable = [
        'usu_nome',
        'usu_sexo',
        'usu_email',
        'usu_data_nascimento',
        'usu_cpf',
        'usu_senha',
        'created_at',
        'updated_at'
    ];

    protected $dates = ['deleted_at'];
}