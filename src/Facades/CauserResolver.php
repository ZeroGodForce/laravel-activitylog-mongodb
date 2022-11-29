<?php

namespace ZeroGodForce\Activitylog\Facades;

use Illuminate\Support\Facades\Facade;
use ZeroGodForce\Activitylog\CauserResolver as ActivitylogCauserResolver;

/**
 * @method static \Jenssegers\Mongodb\Eloquent\Model|null resolve(\Jenssegers\Mongodb\Eloquent\Model|int|string|null $subject = null)
 * @method static \ZeroGodForce\Activitylog\CauserResolver resolveUsing(\Closure $callback)
 * @method static \ZeroGodForce\Activitylog\CauserResolver setCauser(\Jenssegers\Mongodb\Eloquent\Model|null $causer)
 *
 * @see \ZeroGodForce\Activitylog\CauserResolver
 */
class CauserResolver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ActivitylogCauserResolver::class;
    }
}
