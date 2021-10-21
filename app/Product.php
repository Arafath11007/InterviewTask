<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * technology stack
     */
    protected $technologyArray = [
        1 => 'fiber',
        2 => 'dialup'
    ];

    /**
     * create new accessor for Technology
     * 1 => Fiber
     * 2 => Dialup
     */
    public function getTechnologyAttribute($value)
    {
        return $this->technologyArray[$value];
    }

    /**
     * Create new accessor for Static IP
     * It return static ip yes for true else no
     */
    public function getTypeAttribute()
    {
        return $this->static_ip?"Yes":"No";
    }
}
