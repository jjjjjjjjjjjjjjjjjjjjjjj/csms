<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Capacity extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'capacities';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'cat_id', 'c_parent'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
