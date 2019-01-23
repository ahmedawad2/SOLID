<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Discount extends Eloquent
{
    protected $table = 'discounts';
    protected $guarded = [];
}
