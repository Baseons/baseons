<?php

namespace App\Controllers\Job;

use Baseons\Collections\Log;

/**
 * CAUTION: If the script is too long, it is recommended that you create another job to run it asynchronously.
 */
class Example
{
    public function test()
    {
        Log::create('teste', 'Helo Word');
    }
}
