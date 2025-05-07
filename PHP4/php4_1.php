<?php
/*
crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:
le classi non devono avere attributi;
ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
non puoi realizzare metodi definiti public per stampare il risultato;
l’unico metodo public ammesso e' il costrutture.
VERTEBRATES (WARM-BLOODED COLD-BLOODED) :
WB=MAMMALS, BIRDS
CB=FISH REPTILES AMPHIBIANS
*/

require "addons1.php";

//=======================BASE CLASS=========================
class Vertebrates 
{
    public function __construct() {
        $this->printDetails();
    }
    
    protected function printDetails() 
    {
        echo "Sono un animale vertebrato\n";
    }
}

//=======================WARM-BLOODED && COLD-BLOODED=========================
// WB
class WarmBlooded extends Vertebrates 
{
    //Non inserisco un costruttore perche non necessito di implementare nulla in piu rispetto alla classe padre
    protected function printDetails() 
    {
        parent::printDetails();
        echo "Sono un animale a sangue caldo\n";
    }
}

// CB
class ColdBlooded extends Vertebrates 
{
    //Non inserisco un costruttore perche non necessito di implementare nulla in piu rispetto alla classe padre
    protected function printDetails() 
    {
        parent::printDetails();
        echo "Sono un animale a sangue freddo\n";
    }
}
//END

//=======================WARM-BLOODED SUB CLASSES=========================
class Mammals extends WarmBlooded
{

    use PrintName;
    
    public function __construct($_name,$_verse) 
    {
        parent::__construct();
        $this->printMyName($_name,$_verse);
    }

    protected function printDetails() 
    {
        parent::printDetails();
        echo "Sono un animale mammifero\n";
    }
}

class Birds extends WarmBlooded
{

    use PrintName;
    
    public function __construct($_name,$_verse) 
    {
        parent::__construct();
        $this->printMyName($_name,$_verse);
    }

    protected function printDetails() 
    {
        parent::printDetails();
        echo "Sono un uccello\n";
    }
}
//END

//=======================COLD-BLOODED SUB CLASSES=========================
class Fish extends ColdBlooded
{
    use PrintName;
    
    public function __construct($_name,$_verse) 
    {
        parent::__construct();
        $this->printMyName($_name,$_verse);
    }

    protected function printDetails() 
    {
        parent::printDetails();
        echo "Sono un pesce\n";
    }
}

class Reptiles extends ColdBlooded
{

    use PrintName;
    
    public function __construct($_name,$_verse) 
    {
        parent::__construct();
        $this->printMyName($_name,$_verse);
    }

    protected function printDetails() 
    {
        parent::printDetails();
        echo "Sono un rettile\n";
    }
}

class Amphibians extends ColdBlooded
{
    use PrintName;
    
    public function __construct($_name,$_verse) 
    {
        parent::__construct();
        $this->printMyName($_name,$_verse);
    }

    protected function printDetails() 
    {
        parent::printDetails();
        echo "Sono un anfibio\n";
    }
}


$leone = new Mammals("Leone","Roar!");
echo "\n";
$passero = new Birds("Passero","Cip!");
echo "\n";
$magikarp = new Fish("Magikarp","Splash!");
echo "\n";
$pitone = new Reptiles("Pitone","Fshhh!");
echo "\n";
$rospo = new Amphibians("Rospo","Cra!");



