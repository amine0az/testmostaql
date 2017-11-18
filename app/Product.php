<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    public function agencyId(){ return $this->belongsTo(Agency::class, 'agency_id'); }  
}
