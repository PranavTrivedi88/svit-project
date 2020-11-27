<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function discount_rule(){
        return $this->belongsTo(DiscountRule::class);
    }
}
