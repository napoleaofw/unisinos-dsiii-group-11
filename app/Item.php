<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'category_id', 'measure_unit_id'];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function measureUnit() {
        return $this->belongsTo('App\MeasureUnit');
    }

    public function requirements() {
        return $this->hasMany('App\Requirement');
    }
}
