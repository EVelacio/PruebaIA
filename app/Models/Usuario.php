<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Usuario
 * @package App\Models
 * @version April 21, 2019, 1:25 am UTC
 *
 * @property string user_nombre
 * @property string user_apellido_paterno
 * @property string user_apellido_materno
 * @property string user_edad
 * @property string user_calle
 * @property string user_numext
 * @property string user_clolonia
 * @property string user_cp
 * @property string user_tel
 * @property string user_cel
 * @property string user_email
 * @property string user_pass
 * @property integer tipo_usuarios_id
 */
class Usuario extends Model
{

    public $table = 'usuarios';
    


    public $fillable = [
        'user_nombre',
        'user_apellido_paterno',
        'user_apellido_materno',
        'user_edad',
        'user_calle',
        'user_numext',
        'user_clolonia',
        'user_cp',
        'user_tel',
        'user_cel',
        'user_email',
        'user_pass',
        'tipo_usuarios_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_nombre' => 'string',
        'user_apellido_paterno' => 'string',
        'user_apellido_materno' => 'string',
        'user_edad' => 'string',
        'user_calle' => 'string',
        'user_numext' => 'string',
        'user_clolonia' => 'string',
        'user_cp' => 'string',
        'user_tel' => 'string',
        'user_cel' => 'string',
        'user_email' => 'string',
        'user_pass' => 'string',
        'tipo_usuarios_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_nombre' => 'required',
        'user_apellido_paterno' => 'required',
        'user_edad' => 'required',
        'user_cp' => 'max:5',
        'user_tel' => 'min:7',
        'user_cel' => 'min:10',
        'user_email' => 'unique',
        'user_pass' => 'required'
    ];

    
}
