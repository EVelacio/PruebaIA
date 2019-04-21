<?php

namespace App\Repositories;

use App\Models\Mascota;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MascotaRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:55 am UTC
 *
 * @method Mascota findWithoutFail($id, $columns = ['*'])
 * @method Mascota find($id, $columns = ['*'])
 * @method Mascota first($columns = ['*'])
*/
class MascotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mascota_nombre',
        'mascota_sexo',
        'mascota_color',
        'mascota_edad',
        'razas_id',
        'especies_id',
        'esteticos_id',
        'clinicos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mascota::class;
    }
}
