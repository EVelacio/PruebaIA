<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Raza
 * @package App\Models
 * @version April 21, 2019, 1:52 am UTC
 *
 * @property string raza_nombre
 * @property integer especies_id
 */
class Raza extends Model
{

    public $table = 'razas';
    


    public $fillable = [
        'raza_nombre',
        'especies_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'raza_nombre' => 'string',
        'especies_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'raza_nombre' => 'required'
    ];

    
}
