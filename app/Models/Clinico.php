<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Clinico
 * @package App\Models
 * @version April 21, 2019, 1:50 am UTC
 *
 * @property string clinico_fecha
 * @property string clinico_evaluacion
 * @property string clinico_tratamiendo
 * @property integer veterinarios_id
 */
class Clinico extends Model
{

    public $table = 'clinicos';
    


    public $fillable = [
        'clinico_fecha',
        'clinico_evaluacion',
        'clinico_tratamiendo',
        'veterinarios_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'clinico_fecha' => 'string',
        'clinico_evaluacion' => 'string',
        'clinico_tratamiendo' => 'string',
        'veterinarios_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'clinico_evaluacion' => 'required',
        'clinico_tratamiendo' => 'required'
    ];

    
}
