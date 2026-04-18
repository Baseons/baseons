<?php

use Baseons\Collections\Str;
use Baseons\Test\Test;

class example extends Test
{
    public function homeResponsePost()
    {
        $this->assert($this->request(route('web.home'))->post()->status(), 200);
    }

    public function homeResponseGet()
    {
        $this->assert($this->request(route('web.home'))->get()->status(), 200);
    }

    public function testSum()
    {
        $sum = function (int $value) {
            return $value + 1;
        };

        $number = 1;

        $this->assert($sum($number), 2);
    }

    public function isIPV4()
    {
        $ip = '192.168.0.1';

        $this->assert(Str::isIPV4($ip), true);
    }
}
