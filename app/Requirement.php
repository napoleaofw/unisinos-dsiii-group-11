<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requirement';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['item_id', 'urgency_id', 'quantity'];

    public function item() {
        return $this->belongsTo('App\Item');
    }

    public function urgency() {
        return $this->belongsTo('App\Urgency');
    }
}
