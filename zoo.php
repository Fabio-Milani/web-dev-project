<?php

class Animal{
    //attributi
    public $name;
    public $sex;
    public $age;
   
    public static $counter = 0;
    //costruttore
    public function __construct($name,$sex,$age)
    {
        $this->name=$name;
        $this->sex=$sex;
        $this->age=$age;
    
        self::$counter++;
    }

    //metodi e comportamenti
    public function presentatiAnimale(){

        echo "Ciao benvenuto allo zoo,io sono un esemplare di $this->name $this->sex dell età di ben $this->age anni! \n";

    }
        public function showCounter(){
            echo self::$counter++;
        }
};



//presento nel terminale i nuovi arrivati
$shark = new Animal('squaletto','maschio','40');
$tourtle = new Animal('tartaruga','femmina','150');
$monkey = new Animal('scimmia','maschio','25',);

class OtherQuality extends Animal
{     //attributo
    public $specialized;
            //costruttore
        public function __construct($name,$sex,$age,$specialized)
        {       //scope resolution operator ::
            parent::__construct($name,$sex,$age);
            $this->specialized=$specialized;
        }
            public function aggiungiSpecializzazione(){
                echo "Ciao benvenuto allo zoo,io sono un esemplare di $this->name $this->sex dell età di ben $this->age anni! la mia specialità è $this->specialized. \n";

            } 
              
};

$shark = new OtherQuality('squaletto','maschio','40','nuotare velocissimo');
$shark->aggiungiSpecializzazione();
$tourtle = new OtherQuality('tartaruga','femmina','150','sopravvivere a lungo');
$tourtle->aggiungiSpecializzazione();
$monkey = new OtherQuality('scimmia','maschio','25','lanciare escrementi');
$monkey->aggiungiSpecializzazione();

class Type extends Animal{

    public $type;

    public function __construct($name,$sex,$age,$type){
           
        parent::__construct($name,$sex,$age,);
            $this->type=$type;
        }
        public function aggiungiTipo(){
            echo "Ciao benvenuto allo zoo,io sono un esemplare di $this->name $this->sex dell età di ben $this->age anni!. Sono un esemplare di animale $this->type. \n";

        } 
          
};


$shark = new Type('squaletto','maschio','40','nuotare velocissimo','mammifero');
$shark->aggiungitipo();
$tourtle = new Type('tartaruga','femmina','150','sopravvivere a lungo','rettile');
$tourtle->aggiungitipo();
$monkey = new Type('scimmia','maschio','25','lanciare escrementi','mammifero');
$monkey->aggiungitipo();



echo Animal::$counter;
// echo Animal::showCounter(); 