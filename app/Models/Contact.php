<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
    protected $collection = 'articles';
    protected $fillable = ['name','email','phone'];
}
