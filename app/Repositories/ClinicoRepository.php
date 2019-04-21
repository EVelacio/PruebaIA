<?php

namespace App\Repositories;

use App\Models\Clinico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClinicoRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:50 am UTC
 *
 * @method Clinico findWithoutFail($id, $columns = ['*'])
 * @method Clinico find($id, $columns = ['*'])
 * @method Clinico first($columns = ['*'])
*/
class ClinicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clinico_fecha',
        'clinico_evaluacion',
        'clinico_tratamiendo',
        'veterinarios_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clinico::class;
    }
}
