<?php

namespace App\Observers;
use Illuminate\Support\Str;

use App\Models\Curse;

class CourseObserver
{
    /**
     * Handle the Curse "createing" event.
     */
    public function creating(Curse $curse): void
    {
        $curse->uuid = (string) Str::uuid();
    }


}
