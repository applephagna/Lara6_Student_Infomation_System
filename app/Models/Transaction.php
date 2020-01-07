<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version January 7, 2020, 9:43 am UTC
 *
 * @property integer student_id
 * @property integer fee_id
 * @property integer user_id
 * @property integer paid
 * @property string transation_date
 * @property string remark
 * @property string description
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'transation_date',
        'remark',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'transation_id' => 'integer',
        'student_id' => 'integer',
        'fee_id' => 'integer',
        'user_id' => 'integer',
        'paid' => 'integer',
        'transation_date' => 'date',
        'remark' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'fee_id' => 'required',
        'user_id' => 'required',
        'paid' => 'required',
        'transation_date' => 'required',
        'remark' => 'required',
        'description' => 'required'
    ];

    
}
