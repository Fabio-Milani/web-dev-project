<?php

use BackSize as GlobalBackSize;
use FrontSize as GlobalFrontSize;

abstract class FrontSide{
    public abstract function attack();
}

abstract class BackSide{
    public abstract function defence();
}


class RocketLauncher extends FrontSide{
    public function attack(){
        echo "I will blow you up! \n";
    }
}

class MachineGun extends FrontSide{
    public function attack(){
        echo "T t t t t t  t t  t t t t t t tt  \n";
    }
}

class ArmouredShield extends BackSide{
    public function defence(){
        echo "frush.... \n";
    }
}

class Fumogens extends BackSide{
    public function defence(){
        echo "you cannot hit me if you cannot see me! \n";
    }
}

class BatMobile{
    public $parteAnterioreArma1;
    public $partePosterioreArma1;
    public $parteAnterioreArma2;
    public $partePosterioreArma2;

    public function __construct(FrontSide $parteAnterioreArma1, BackSide $partePosterioreArma1, FrontSide $parteAnterioreArma2, BackSide $partePosterioreArma2){//Dependency Injection
        $this->parteAnterioreArma1 = $parteAnterioreArma1;
        $this->partePosterioreArma1 = $partePosterioreArma1;
        $this->parteAnterioreArma2 = $parteAnterioreArma2;
        $this->partePosterioreArma2 = $partePosterioreArma2;

    }

    public function tiAttaccoArma1(){
        $this->parteAnterioreArma1->attack();//Fluent interface
    }

    public function tiAttaccoArma2(){
        $this->parteAnterioreArma2->attack();
    }


    public function miDifendo(){
        $this->partePosterioreArma1->defence();
        $this->partePosterioreArma2->defence();
    }
}

$macchina1=new BatMobile(new MachineGun(), new ArmouredShield(), new RocketLauncher(), new Fumogens());//Object composition
$macchina1->tiAttaccoArma1();
$macchina1->tiAttaccoArma2();
$macchina1->miDifendo();


