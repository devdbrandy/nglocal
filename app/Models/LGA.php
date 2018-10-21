<?php

namespace App\Models;

use App\Models\BaseModel;

class LGA extends BaseModel
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'lgas';

    /**
     * Get the state that owns the lga.
     */
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
}