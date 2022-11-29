<?php

namespace ZeroGodForce\Activitylog\Test\Models;

use ZeroGodForce\Activitylog\Models\Activity;

class CustomTableNameOnActivityModel extends Activity
{
    protected $table = 'custom_table_name';
}
