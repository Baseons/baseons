<?php

use Baseons\Collections\Log;
use Baseons\Job\Job;

// --------------------------------------------------------------------------|
//                               JOB ROUTES                                  |
// --------------------------------------------------------------------------|

Job::namespace('App\Jobs')->group(function () {
    Job::everyMinute('1', function () {
        Log::create('teste', 'Helo Word');
    })->description('Test job')->unique()->name('test.job');
});
