<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeasureUnit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'measure_unit';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['acronym', 'description'];
}
