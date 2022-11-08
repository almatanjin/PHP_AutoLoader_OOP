<?php declare(strict_types=1);

namespace Alma88\DemoPhp\Classes;
use Alma88\DemoPhp\Interfaces\Questionpaper;
class Teacher extends Person implements Questionpaper
{
    public string $coursename;

    public function __construct($name,$coursename)
    {
        parent::__construct($name);
        $this->coursename=$coursename;
        echo "This is teacher";
    }

    public function course()
    {
        echo $this->coursename;
    }


}