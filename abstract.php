<?php

use Student as GlobalStudent;
use Teacher as GlobalTeacher;

abstract class Person{

    // attributes
    public $name;
    public $surname;
    public $age;

    // constructor
    public function __construct($name,$surname,$age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
    // method
    public abstract function introduceYourself();
      
}



// daughter classes will have the same method as their father when using the abstract
class Teacher extends Person{

    public $wage;
        
    use Bus;
        
        public function __construct($name,$surname,$age,$wage){
                parent::__construct($name,$surname,$age);    
                    $this->wage=$wage;                             
            }
        
            public function introduceYourself(){
                echo "Hello i'am $this->name $this->surname and i'm $this->age years old and i make $this->wage euro per year! \n";
            }
        
    }

    class Student extends Person{
    
        use Bus;
        public $average;
    
        public function __construct($name,$surname,$age,$average){
            parent::__construct($name,$surname,$age);
                $this->average=$average;
        }
        public function introduceYourself(){
            echo "Hello i'am $this->name $this->surname and i'm $this->age years old and my average is $this->average \n";
        }
    
}

trait Bus{
    public function moving(){
        echo "I take bus";
    }
}


$ale = new Teacher('Alexandra','Milani','28','50000');
$ale->introduceYourself();
$ale->moving();
$fabio = new Student('Fabio','Milani','30','8');
$fabio->introduceYourself();
$fabio->moving();