<?php

declare(strict_types=1);

namespace Alma88\DemoPhp\Classes;

use Alma88\DemoPhp\Traits\hellow;

abstract class Person
{
    use hellow;
    public string $name;

    public function __construct($name)
    {
        $this->name=$name;


        // echo " This is person class......";
    }
    public function getinfo()
    {
        echo $this->name.PHP_EOL;
    }
}
