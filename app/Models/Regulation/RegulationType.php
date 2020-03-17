<?php

namespace App\Models\Regulation;

use Illuminate\Database\Eloquent\Model;

class RegulationType extends Model
{
    protected $table = 'regulation_types_lookup';

    protected $fillable = ['id', 'name', 'is_positive_affect'];

    public function regulationClasses()
    {
        return $this->hasMany('App\Models\Regulation\RegulationClass', 'regulation_type_id');
    }
}
