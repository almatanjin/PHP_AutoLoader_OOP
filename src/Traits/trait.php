<?php

namespace Alma88\DemoPhp\Traits;

trait hellow
{
    public function hellow()
    {
        echo "hellow" . PHP_EOL;
    }
}
trait HasUuid{
    public function isValid(string $uuid):bool{
        return true;
    }
}