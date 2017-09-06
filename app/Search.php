<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Search extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Search';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ipaddress','item_id','user_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
