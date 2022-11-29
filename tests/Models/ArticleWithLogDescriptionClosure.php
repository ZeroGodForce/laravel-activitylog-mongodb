<?php

namespace ZeroGodForce\Activitylog\Test\Models;

use ZeroGodForce\Activitylog\LogOptions;
use ZeroGodForce\Activitylog\Traits\LogsActivity;

class ArticleWithLogDescriptionClosure extends Article
{
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->setDescriptionForEvent(function ($eventName) {
                return $eventName;
            });
    }
}
