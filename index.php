<?php



use Alma88\DemoPhp\Classes\Student;
use Alma88\DemoPhp\Classes\Teacher;
use Alma88\DemoPhp\Classes\Doctor;

require_once 'vendor/autoload.php';


// (new Dummy)->print_x();

// (new Person('Alma'))->getinfo();
(new Student("alma", 18101088))->hellow();
(new Teacher('Tanjin','ICT'))->coursename;
(new Doctor("Mr Rokon","MBBS",4,"Cardiologists"))->getDoctorInfo();
