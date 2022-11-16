<?php



use Alma88\DemoPhp\Classes\Student;
use Alma88\DemoPhp\Classes\Teacher;
use Alma88\DemoPhp\Classes\Doctor;
use function Alma88\App\sum;

require_once 'vendor/autoload.php';


// (new Dummy)->print_x();

// (new Person('Alma'))->getinfo();
(new Student("alma", 18101088))->hellow();
(new Teacher('Tanjin','ICT'))->coursename;
(new Doctor("Mr Rokon","MBBS",4,"Cardiologists"))->getDoctorInfo();

echo sum(10,20);
echo PHP_EOL;
echo add(20,10,50);
echo PHP_EOL;
echo concate('I'," ",'am'," ",'Alma');
echo PHP_EOL;
