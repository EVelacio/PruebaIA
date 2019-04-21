<?php

namespace App\Repositories;

use App\Models\Secretaria;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SecretariaRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:48 am UTC
 *
 * @method Secretaria findWithoutFail($id, $columns = ['*'])
 * @method Secretaria find($id, $columns = ['*'])
 * @method Secretaria first($columns = ['*'])
*/
class SecretariaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuarios_id',
        'horarios_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Secretaria::class;
    }
}
