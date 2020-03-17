<?php

namespace App\Models\Regulation;

use Illuminate\Database\Eloquent\Model;

class RegulationElement extends Model
{
    protected $table = 'regulation_elements';

    protected $fillable = ['id', 'name', 'notes', 'regulation_class_id', 'is_affect_attendance', 'affected_type', 'time_per_minutes'];

    public function regulationClass()
    {
        return $this->belongsTo('App\Models\Regulation\RegulationClass', 'regulation_class_id');
    }

    public function affectionDegrees()
    {
        return $this->hasMany('App\Models\Regulation\RegulationAffectionDegree', 'regulation_element_id                              ');
    }


}
