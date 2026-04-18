<?php

namespace App\Console;

use Baseons\Shell\Shell;

class Example
{
    public function helo()
    {
        Shell::green('What is your name?');

        $name = Shell::readline();

        Shell::br()->normal('Hello')->red($name)->normal('welcome to the console!')->br();
    }
}
