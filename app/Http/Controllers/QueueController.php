<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class QueueController extends Controller
{
    public function getIndex(){
        $currentClassName = get_class($this);
        $job = new \App\Jobs\CacheQueue($currentClassName);
        dispatch($job);
        return response("dispatched", 200);
    }
}
