<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urgency extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'urgency';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['importance', 'description'];
}
