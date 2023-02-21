<?php

use Person as GlobalPerson;

class Person1{

    public $name;
    public $surname;
    public $age;

    public static $counter = 0;

        public function __construct($name,$surname,$age)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;

            self::$counter++;
        }

            public function introduced(){
                echo "Hello i'm $this->name $this->surname and i'am $this->age years old. \n";
            }

            public static function showCounter(){
                echo self::$counter;
            }

        }

$fabio = new Person1('Fabio','Milani','30');
$fabio->introduced();
$sofia = new Person1('Sofia','Milani','8');
$sofia->introduced();
$alexandra = new Person1('Alexandra','Milani','28');
$alexandra->introduced();


class Teacher extends Person1{

    public $wage;
        
        public function __construct($name,$surname,$age,$wage){
                parent::__construct($name,$surname,$age);    
                    $this->wage=$wage;                             
            }
        
            public function presentedTeacher(){
                echo "Hello i'am $this->name $this->surname and i'm $this->age years old and i make $this->wage euro per year! \n";
            }
        
    }
    
    class Student extends Person1{
    
        public $average;
    
        public function __construct($name,$surname,$age,$average){
            parent::__construct($name,$surname,$age);
                $this->average=$average;
        }
        public function presentedStudent(){
            echo "Hello i'am $this->name $this->surname and i'm $this->age years old and my average is $this->average \n";
        }
    
}
    
$ale= new Teacher('Alessandro','Leo','34','25000');
$raissa = new Student('Raissa','Caputo','21','9');
$ale-> presentedTeacher();
$raissa->presentedStudent();

// echo Person::$counter; static attributes

echo Person1::showCounter(); echo "\n Numbers of Person created";