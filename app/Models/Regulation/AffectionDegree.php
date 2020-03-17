<?php

namespace App\Models\Regulation;

use Illuminate\Database\Eloquent\Model;

class RegulationAffectionDegree extends Model
{
    protected $table = 'regulation_affection_degrees';

    protected $fillable = ['id', 'name', 'notes', 'regulation_element_id', 'value_per_day'];

    public function regulationElements()
    {
        return $this->belongsTo('App\Models\Regulation\RegulationElement', 'regulation_element_id');
    }
}
