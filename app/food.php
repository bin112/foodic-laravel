<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    //
     protected $fillable = [
        'food_name', 'food_price', 'food_categories','food_description'];
}
