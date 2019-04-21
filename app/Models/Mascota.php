<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Mascota
 * @package App\Models
 * @version April 21, 2019, 1:55 am UTC
 *
 * @property string mascota_nombre
 * @property string mascota_sexo
 * @property string mascota_color
 * @property string mascota_edad
 * @property integer razas_id
 * @property integer especies_id
 * @property integer esteticos_id
 * @property integer clinicos_id
 */
class Mascota extends Model
{

    public $table = 'mascotas';
    


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'mascota_nombre' => 'string',
        'mascota_sexo' => 'string',
        'mascota_color' => 'string',
        'mascota_edad' => 'string',
        'razas_id' => 'integer',
        'especies_id' => 'integer',
        'esteticos_id' => 'integer',
        'clinicos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mascota_nombre' => 'required',
        'mascota_sexo' => 'required',
        'mascota_color' => 'required',
        'mascota_edad' => 'required'
    ];

    
}
