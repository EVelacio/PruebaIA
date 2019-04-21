<?php

namespace App\Repositories;

use App\Models\TipoServicio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoServicioRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:07 am UTC
 *
 * @method TipoServicio findWithoutFail($id, $columns = ['*'])
 * @method TipoServicio find($id, $columns = ['*'])
 * @method TipoServicio first($columns = ['*'])
*/
class TipoServicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'servicio_tipo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoServicio::class;
    }
}
