<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded = [];

    public function companynames() {
        return $this->hasOne('\App\CompanyName', 'id', 'companyname');
    }

    public function tyresizes() {
        return $this->hasOne('App\TyreSize', 'id', 'tyresize');
    }

    public function aspectratios() {
        return $this->hasOne('App\AspectRatio', 'id', 'aspectratio');
    }

    public function rimsizes() {
        return $this->hasOne('\App\RimSize', 'id', 'rimsize');
    }
}
