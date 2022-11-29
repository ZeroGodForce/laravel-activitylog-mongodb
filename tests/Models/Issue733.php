<?php

namespace ZeroGodForce\Activitylog\Test\Models;

use ZeroGodForce\Activitylog\LogOptions;
use ZeroGodForce\Activitylog\Traits\LogsActivity;

class Issue733 extends Article
{
    use LogsActivity;

    protected static $recordEvents = [
        'retrieved',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->dontSubmitEmptyLogs()
        ->logOnly(['name']);
    }
}
