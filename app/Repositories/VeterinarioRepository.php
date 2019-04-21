<?php

namespace App\Repositories;

use App\Models\Veterinario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VeterinarioRepository
 * @package App\Repositories
 * @version April 21, 2019, 1:38 am UTC
 *
 * @method Veterinario findWithoutFail($id, $columns = ['*'])
 * @method Veterinario find($id, $columns = ['*'])
 * @method Veterinario first($columns = ['*'])
*/
class VeterinarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vet_cedula',
        'usuarios_id',
        'horarios_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Veterinario::class;
    }
}
