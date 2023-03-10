<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $card_num
 * @property string $cvv
 */
class Paymentcard extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paymentcard';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id', 'card_num', 'cvv', 'address_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'card_num' => 'string', 'cvv' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
