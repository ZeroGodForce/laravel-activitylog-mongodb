<?php

namespace ZeroGodForce\Activitylog\Test\Models;

use ZeroGodForce\Activitylog\Models\Activity;

class CustomDatabaseConnectionOnActivityModel extends Activity
{
    protected $connection = 'custom_connection_name';
}
