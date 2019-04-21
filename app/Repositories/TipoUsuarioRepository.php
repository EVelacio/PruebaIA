<?php

namespace App\Repositories;

use App\Models\TipoUsuario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoUsuarioRepository
 * @package App\Repositories
 * @version April 21, 2019, 12:51 am UTC
 *
 * @method TipoUsuario findWithoutFail($id, $columns = ['*'])
 * @method TipoUsuario find($id, $columns = ['*'])
 * @method TipoUsuario first($columns = ['*'])
*/
class TipoUsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_level'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoUsuario::class;
    }
}
