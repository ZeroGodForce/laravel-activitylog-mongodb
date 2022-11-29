<?php

namespace ZeroGodForce\Activitylog\Contracts;

use Closure;
use ZeroGodForce\Activitylog\EventLogBag;

interface LoggablePipe
{
    public function handle(EventLogBag $event, Closure $next): EventLogBag;
}
