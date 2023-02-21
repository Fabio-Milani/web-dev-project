<?php


class Boat{
    //1 attributes
    public $name; 
    public $model; 
    public $engine; 
    public $weight; 
    public $work; 
    public $beach; 
    public $fun; 
    public $cost;
    
    // 2 costructor
    public function __construct($name,$model,$engine,$weight,$work,$beach,$fun)
    {
        $this->name=$name; 
        $this->model=$model; 
        $this->engine=$engine; 
        $this->weight=$weight; 
        $this->work=$work; 
        $this->beach=$beach;
        $this->fun=$fun;
    }
    // 3 methods
    public function see(){
        echo "Ecco il nuovo $this->name, l'eccezzionale $this->model che monta motori di cilindrata pari a $this->engine, la stazza è di $this->weight e può essere utilizzato sia per $this->work sia per $this->beach...ma sopratutto per $this->fun!! \n";
    }
}

$breeze = new Boat('Conero','breeze','150-250 cc','2t','pesca e allevamento','acque basse','divertimento');
$breeze->see();


//here i specializing the class
class SpeedBoat extends Boat{
    public $cost;

    //this constructor is not the same as Boat, it work with a copy of data
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

    public function __construct($name,$model,$engine,$weight,$work,$beach,$fun,$cost,$display,$seat,$canopy){
    
    // i used the parent::__construct to be able to retrieve attributes from the parent
    // so if I wanted to, I could call them up with the 

        parent::__construct($name,$model,$engine,$weight,$work,$beach,$fun,$cost);
        $this->display=$display; $this->seat=$seat; $this->canopy=$canopy;
    }
    public function seeOptional(){
        echo "Ecco i nuovi fiammanti optional del $this->name $this->model, $this->display, $this->seat, $this->canopy";
    }
}

$StellaMaris = new SpeedBoat('Conero','breeze','150-250 cc','2t','pesca e allevamento','acque basse','divertimento','350000$');
$optionalsCool = new OptionalsOnBoat('Conero','breeze','150-250 cc','2t','pesca e allevamento','acque basse','divertimento','350000$','HD touch','sedili in pelle','tettoia chiudibile');

// functions are called with this pattern $object->function
$StellaMaris->viewCost();
$optionalsCool->seeOptional();