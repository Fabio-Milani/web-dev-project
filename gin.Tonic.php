<?php

abstract class Gin{
    public abstract function insertGin();

}

abstract class Tonic{
    public abstract function insertTonic();
}

// Gin Portofino, Gin Mare
// Tonica Schweppes, Tonica Cortese

class GinPortofino extends Gin{
    public function insertGin(){
        echo "Put the Portofino in the glass.. \n";
    }
}
class Mare extends Gin{
    public function insertGin(){
        echo "Put the Gin Mare in the glass.. \n";
    }
}
class Schweppes extends Tonic{
    public function insertTonic(){
        echo "Put the Schweppes in the glass.. \n";
    }
}
class Cortese extends Tonic{
    public function insertTonic(){
        echo "Put the Cortese in the glass.. \n";
    }
}

class GinTonic{
    public $gin;
    public $tonic;

    public function __construct(Gin $gin, Tonic $tonic)
    {
        $this->gin = $gin;
        $this->tonic = $tonic;
    }
    public function showCocktail(){
        $this->gin->insertGin();
        $this->tonic->insertTonic();
    }
}

$firtsCocktail = new GinTonic(new Mare(), new Schweppes());
$firtsCocktail->showCocktail();

$secondCocktail = new GinTonic(new GinPortofino(), new Cortese());
$secondCocktail->showCocktail();


