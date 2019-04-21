<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Horario
 * @package App\Models
 * @version April 21, 2019, 1:32 am UTC
 *
 * @property string fecha_desde
 * @property string fecha_hasta
 * @property string salida
 */
class Horario extends Model
{

    public $table = 'horarios';
    


    public $fillable = [
        'fecha_desde',
        'fecha_hasta',
        'salida'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha_desde' => 'string',
        'fecha_hasta' => 'string',
        'salida' => 'string',
        'entrada'=> 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
