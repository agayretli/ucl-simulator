<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $incrementing = true;
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $table = 'points';
}
