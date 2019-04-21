<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Estetico
 * @package App\Models
 * @version April 21, 2019, 1:31 am UTC
 *
 * @property string estetico_fecha
 * @property integer tipo_servicios_id
 */
class Estetico extends Model
{

    public $table = 'esteticos';
    


    public $fillable = [
        'estetico_fecha',
        'tipo_servicios_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'estetico_fecha' => 'string',
        'tipo_servicios_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estetico_fecha' => 'required'
    ];

    
}
