<?php

namespace App\Repositories;

use App\Models\Horario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HorarioRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:32 am UTC
 *
 * @method Horario findWithoutFail($id, $columns = ['*'])
 * @method Horario find($id, $columns = ['*'])
 * @method Horario first($columns = ['*'])
*/
class HorarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_desde',
        'fecha_hasta',
        'salida',
        'entrada'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Horario::class;
    }
}
