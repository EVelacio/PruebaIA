<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Especie
 * @package App\Models
 * @version April 21, 2019, 1:51 am UTC
 *
 * @property string especie_nombre
 */
class Especie extends Model
{

    public $table = 'especies';
    


    public $fillable = [
        'especie_nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'especie_nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'especie_nombre' => 'required'
    ];

    
}
