<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    //
    protected $fillable = [
        'First_Name', 'Last_Name', 'url','Email_address','Phone_number','Password','Repeat_password'];
}
