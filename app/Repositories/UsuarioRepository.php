<?php

namespace App\Repositories;

use App\Models\Usuario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:25 am UTC
 *
 * @method Usuario findWithoutFail($id, $columns = ['*'])
 * @method Usuario find($id, $columns = ['*'])
 * @method Usuario first($columns = ['*'])
*/
class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_nombre',
        'user_apellido_paterno',
        'user_apellido_materno',
        'user_edad',
        'user_calle',
        'user_numext',
        'user_clolonia',
        'user_cp',
        'user_tel',
        'user_cel',
        'user_email',
        'user_pass',
        'tipo_usuarios_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usuario::class;
    }
}
