<?php

namespace App\Models\Regulation;

use Illuminate\Database\Eloquent\Model;

class RegulationClass extends Model
{
    protected $table = 'regulation_classes';

    protected $fillable = ['id', 'name', 'regulation_type_id', 'company_id'];

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }

    public function regulationType()
    {
        return $this->belongsTo('App\Models\Regulation\RegulationType', 'regulation_type_id');
    }

    public function regulationElements()
    {
        return $this->hasMany('App\Models\Regulation\RegulationElements', 'regulation_class_id');
    }

}
