<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Secretaria
 * @package App\Models
 * @version April 21, 2019, 1:48 am UTC
 *
 * @property integer usuarios_id
 * @property integer horarios_id
 */
class Secretaria extends Model
{

    public $table = 'secretarias';
    


    public $fillable = [
        'usuarios_id',
        'horarios_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'usuarios_id' => 'integer',
        'horarios_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
