<?php

abstract class FrontSize{
    public abstract function attack();
}
abstract class BackSize{
    public abstract function defence();
}
abstract class InsideCar{
    public abstract function supply();
}
        class Arpion extends FrontSize{
            public function attack(){
                echo "I'll hit you with my harpoon! \n";
        }}
        class Laser extends FrontSize{
            public function attack(){
                echo "I'll burn you with my laser! \n";
        }}
        class FlahBang extends BackSize{ 
            public function defence(){
                echo "I'll stun you with my granade! \n";
        }}
        class Shield extends BackSize{
            public function defence(){
                echo "you can't brake this shield! \n";
        }}
        class SubMarine extends InsideCar{
            public function supply(){
                echo "This is much more than a simple car, the water? It's not a problem! \n";
        }}
        class EasyJet extends InsideCar{
            public function supply(){
                echo "This is much more than a simple car, fly? It's not a problem! \n";
            }}
class JamesBondCar{
    public $frontSizeWeapon1;
    public $frontSizeWeapon2;
    public $backSizeWeapon1;
    public $backSizeWeapon2;
    public $insideCarWeapon1;
    public $insideCarWeapon2;

    public function __construct(FrontSize $frontSizeWeapon1,FrontSize $frontSizeWeapon2,BackSize $backSizeWeapon1,BackSize $backSizeWeapon2,InsideCar $insideCarWeapon1,InsideCar $insideCarWeapon2)//Dependency Injection
    {
        $this->frontSizeWeapon1 = $frontSizeWeapon1;
        $this->frontSizeWeapon2 = $frontSizeWeapon2;
        $this->backSizeWeapon1 = $backSizeWeapon1;
        $this->backSizeWeapon2 = $backSizeWeapon2;
        $this->insideCarWeapon1 = $insideCarWeapon1;
        $this->insideCarWeapon2 = $insideCarWeapon2;
    }

    public function attackWeapon1(){
        $this->frontSizeWeapon1->attack();//Fluent interface
    }
    public function attackWeapon2(){
        $this->frontSizeWeapon2->attack();
    }
    public function defenceWeapon1(){
        $this->backSizeWeapon1->defence();
    }
    public function defenceWeapon2(){
        $this->backSizeWeapon2->defence();
    }
    public function supplyWeapon1(){
        $this->insideCarWeapon1->supply();
    }
    public function supplyWeapon2(){
        $this->insideCarWeapon2->supply();
    }
}

$car = new JamesBondCar(new Arpion(),new Laser(), new FlahBang(), new Shield(), new SubMarine(), new EasyJet());
$car->attackWeapon1();
$car->attackWeapon2();
$car->defenceWeapon1();
$car->defenceWeapon2();
$car->supplyWeapon1();
$car->supplyWeapon2();


print_r($car);
//trait prende il codice e lo schianta dentro la classe che voglio e far si che sia come un suo elemento nativo

//RICORDARSI DI CREARE UN TRAIT