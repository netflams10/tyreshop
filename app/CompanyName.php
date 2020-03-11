<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyName extends Model
{
    protected $fillable = ['companyname'];
    
    // public function productcompanyname() {
    //     return $this->hasMany('\App\Products', 'companyname', 'id');
    // }
}
