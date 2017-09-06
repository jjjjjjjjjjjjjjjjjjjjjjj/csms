<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Generation extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'generations';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
