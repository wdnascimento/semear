<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = ['id','payer','reference','value'];

    protected $attribute = ["desc_value"];


    // numberToText
    public function getDescValueAttribute()
    {
        return ($this->value) ? numberToText($this->value,1) : '' ;
    }
}
