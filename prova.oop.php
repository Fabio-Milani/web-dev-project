<?php

use Person as GlobalPerson;

class Person{
    // attributi
    public $name;
    public $surname;  
    public $age;
    // ho descritto le propietà ma non hanno ancora un valore, ora serve il costruttore.

    // sul subito non si illuminano perchè sono parametri formali (segnaposto), non REALI, questi ultimi serviranno come imput per dargli valore
    public function __construct($name,$surname,$age){
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
    }
    // metodi o comportamenti
    public function presentati(){
        echo "ciao sono $this->name $this->surname ed ho $this->age anni";
    }
    // questo è un comportamento, i nostri oggetti fanno qualcosa.. lo attivo con **riga 34**


}
// ora istanziamo un oggetto tramite i metodi o comportamenti, e avremo bisogno di usare la keyword "new" che attiva il meccanismo del costruttore, che cercherà all'interno dei nostri armadi.
// parametro reale + new.. adesso questi dati vanno a finire nel cancello d'entrata del costruttore.
// ora l'oggetto è diventato $fabio..
$fabio = new Person('Fabio','Milani','30');
// $fabio =new istanziazione di un oggetto
//  echo $fabio->name;
//  questo ora è un oggetto, un istanza di una classe. Stiamo facendo la descrizione di un oggetto, quindi lui andrà a creare un armadio con queste caratteristiche. quando andremo a creare un altro oggetto, questo e come se si svuotasse e se ne crea un altro, noi di volta in volta chiediamo di costruirci un altro armadio (sempre con la keyword new), sempre con name, surname ed age, ovviamente con i cassetti vuoti.

$fabio->presentati();











class Car{

    public $name;
    public $model;
    public $engine;
    public $wheel;
    public $door;
    public $age;

    public function __construct($name,$model,$engine,$wheel,$door,$age)
    {
        $this->name=$name;
        $this->model=$model;
        $this->engine=$engine;
        $this->wheel=$wheel;
        $this->door=$door;
        $this->age=$age;

    }

    public function presentati(){
    echo "Ciao, sono $this->name $this->model sono una nuova macchina veloce e performante, il mio motore è un $this->engine di cilindrata, le $this->wheel ruote sono enormi, ho $this->door porte e sono vecchia di $this->age. Ti aspetto..";
    }


}

$suzuki = new Car('Suzuki','Vitara','1600cc','4','5','7 years');
// print_r($suzuki);
$fiorino = new Car('Fiat','Fiorino','1290 cc','4','3','8');
// print_r($fiorino); ricorda, dato complesso

echo "\n";
echo $suzuki->name; //questo -> mi permette di accedere al singolo dato, se è un pubblic, echo perche è semplice.
echo "\n";
$suzuki->presentati();


class Videogame{

    public $name;
    public $type;
    public $model;
    public $manyPlayers;
    public $connection;

    public function __construct($name,$type,$model,$manyPlayers,$connection)
    {
        $this->name=$name; $this->type=$type; $this->model=$model; $this->manyPlayers=$manyPlayers; $this->connection=$connection;
    }

    public function declared(){
        echo "Hello, i'm the new $this->name, a super type of $this->type , $this->model and you can play with $this->manyPlayers and i need a $this->connection.";
    }
}

$playstaion= new Videogame('playstation','console','12 GG','twenty players','lan and wi-fi');
$playstaion->declared();
$xbox= new Videogame('xbox','console next gen','xbox scorpion','20 players','wi-fi and lan');
$xbox->declared();


class Boat{
    //1 attrtibuti
    public $name; public $model; public $engine; public $weight; public $work; public $beach; public $fun; public $cost;
    // 2 costruttore
    public function __construct($name,$model,$engine,$weight,$work,$beach,$fun)
    {
        $this->name=$name; $this->model=$model; $this->engine=$engine; $this->weight=$weight; $this->work=$work; $this->beach=$beach;
        $this->fun=$fun;
    }
    // 3 metodi
    public function see(){
        echo "Ecco il nuovo $this->name, l'eccezzionale $this->model che monta motori di cilindrata pari a $this->engine, la stazza è di $this->weight e può essere utilizzato sia per $this->work sia per $this->beach...ma sopratutto per $this->fun!!";
    }
}
$breeze = new Boat('Conero','breeze','150-250 cc','2t','pesca e allevamento','acque basse','divertimento');
// print_r($breeze);
// echo $breeze->work;
// echo "\n";
// echo $breeze->beach;
$breeze->see();
echo "\n";
// quì sto specializzando la classe 
class SpeedBoat extends Boat{
    public $cost;

    // questo costruttore è un altro, non quello di boat
    public function __construct($name,$model,$engine,$weight,$work,$beach,$fun,$cost){
            parent::__construct($name,$model,$engine,$weight,$work,$beach,$fun);
           $this->cost=$cost;
    }
    public function viewCost(){
        echo "Ecco il listino prezzi aggiornato per $this->name $this->model. A partire da $this->cost. \n";
    }
}
class OptionalsOnBoat extends Boat{
    
    public $display;
    public $seat;
    public $canopy;

    public function __construct($name,$model,$engine,$weight,$work,$beach,$fun,$cost,$display,$seat,$canopy)
    {
        parent::__construct($name,$model,$engine,$weight,$work,$beach,$fun,$cost);
        $this->display=$display; $this->seat=$seat; $this->canopy=$canopy;
    }
    public function seeOptional(){
        echo "Ecco i nuovi fiammanti optional,del $this->name $this->model, $this->display, $this->seat, $this->canopy";
    }
}

$StellaMaris = new SpeedBoat('Conero','breeze','150-250 cc','2t','pesca e allevamento','acque basse','divertimento','350000$');
$optionalsCool = new OptionalsOnBoat('Conero','breeze','150-250 cc','2t','pesca e allevamento','acque basse','divertimento','350000$','HD touch','sedili in pelle','tettoia chiudibile');
$StellaMaris->viewCost();
$optionalsCool->seeOptional();


