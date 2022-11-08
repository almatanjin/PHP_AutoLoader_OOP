<?php declare(strict_types=1);

namespace Alma88\DemoPhp\Classes;
use Alma88\DemoPhp\Classes\Person;


class Doctor extends Person
{
    public string $degree;
    public int $experience;
    public string $specialist;

    public function __construct($name,$degree,$experience,$specialist)
    {
        parent::__construct($name);
        $this->degree=$degree;
        $this->experience=$experience;
        $this->specialist=$specialist;

        echo "<br> <br> Doctor Rendering........<br>";
    }


    public function getDoctorInfo()
    {
        echo "Name :" .$this->name ."<br>";
        echo "Degree :".$this->degree."<br>";
        echo "Experience :".$this->experience."<br>";
        echo "Specialist :".$this->specialist."<br>";
    }
}