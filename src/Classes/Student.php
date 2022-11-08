<?php

declare(strict_types=1);

namespace Alma88\DemoPhp\Classes;

class Student extends Person
{
    public int $id;

    public function __construct($name, $id)
    {
        parent::__construct($name);
        $this->id=$id;


        echo " This is student class<br>";
    }
}
