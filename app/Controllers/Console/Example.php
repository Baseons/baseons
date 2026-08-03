<?php

namespace App\Controllers\Console;

use Baseons\Shell\Shell;

class Example
{
    public function test()
    {
        Shell::green('What is your name?');

        $name = Shell::readline();

        Shell::br()->normal('Helo')->red($name)->normal('welcome to the console!')->br();
    }
}
