<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoUsuario
 * @package App\Models
 * @version April 21, 2019, 12:51 am UTC
 *
 * @property string user_level
 */
class TipoUsuario extends Model
{

    public $table = 'tipo_usuarios';
    


    public $fillable = [
        'user_level'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_level' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_level' => 'required'
    ];

    
}
