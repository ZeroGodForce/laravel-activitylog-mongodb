<?php

namespace ZeroGodForce\Activitylog\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use ZeroGodForce\Activitylog\ActivitylogServiceProvider;

trait CausesActivity
{
    public function actions(): MorphMany
    {
        return $this->morphMany(
            ActivitylogServiceProvider::determineActivityModel(),
            'causer'
        );
    }
}
