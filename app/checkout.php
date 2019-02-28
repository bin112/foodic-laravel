<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    //
     protected $fillable = [
        'first_name', 'last_name', 'country','company_name','address','city','zpostal ','email_address','phone'];
}
