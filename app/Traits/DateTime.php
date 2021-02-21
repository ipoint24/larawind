<?php

namespace App\Traits;

use Illuminate\Support\Carbon;

trait DateTime
{

    public function dateForHumans($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}