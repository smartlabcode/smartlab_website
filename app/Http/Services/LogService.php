<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26/04/2019
 * Time: 14:53
 */

namespace App\Http\Services;

use App\Log;

class LogService
{
    public function setLog($type, $source) {
        // create object
        $log = new Log();

        $log->type = $type;
        $log->source = $source;

        $log->save();
    }
}