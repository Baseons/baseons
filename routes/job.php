<?php

use Baseons\Job\Job;

// --------------------------------------------------------------------------|
//                               JOB ROUTES                                  |
// --------------------------------------------------------------------------|

Job::namespace('App\Controllers\Job')->group(function () {
    Job::everyMinute('1', 'Example@test')->description('Test job')->unique()->name('test.job');
});
