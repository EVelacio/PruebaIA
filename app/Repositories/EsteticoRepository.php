<?php

namespace App\Repositories;

use App\Models\Estetico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EsteticoRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:31 am UTC
 *
 * @method Estetico findWithoutFail($id, $columns = ['*'])
 * @method Estetico find($id, $columns = ['*'])
 * @method Estetico first($columns = ['*'])
*/
class EsteticoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estetico_fecha',
        'tipo_servicios_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estetico::class;
    }
}
