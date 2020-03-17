<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public function regulationClasses()
    {
        return $this->hasMany('App\Models\Regulation\RegulationClass', 'company_id');
    }
}
