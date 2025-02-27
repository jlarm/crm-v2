<?php

namespace App\Observers;

use App\Models\Dealership;
use Illuminate\Support\Str;

class DealershipObserver
{
    public function creating(Dealership $dealership)
    {
        $dealership->uuid = Str::uuid();
    }
}
