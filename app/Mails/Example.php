<?php

namespace App\Mails;

use Baseons\Mail\Builder;

class Example extends Builder
{
    public function make(mixed $data = null)
    {
        $this->subject('Example title');

        $this->to('baseons@hotmail.com', 'Baseons');

        $this->content('Helo word');

        return $this;
    }
}
