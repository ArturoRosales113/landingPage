<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
 protected $fillable = [
   'email','name','ticket',
    ];
}