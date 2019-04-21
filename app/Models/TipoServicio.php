<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoServicio
 * @package App\Models
 * @version April 21, 2019, 1:07 am UTC
 *
 * @property string servicio_tipo
 */
class TipoServicio extends Model
{

    public $table = 'tipo_servicios';
    


    public $fillable = [
        'servicio_tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'servicio_tipo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'servicio_tipo' => 'required'
    ];

    
}
