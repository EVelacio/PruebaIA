<?php

namespace App\Repositories;

use App\Models\Especie;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EspecieRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:51 am UTC
 *
 * @method Especie findWithoutFail($id, $columns = ['*'])
 * @method Especie find($id, $columns = ['*'])
 * @method Especie first($columns = ['*'])
*/
class EspecieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'especie_nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Especie::class;
    }
}
