<?php

namespace App\Http\Traits;

use Illuminate\Support\Carbon;

trait DateTimeTrait
{

    public function dateForHumans($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}