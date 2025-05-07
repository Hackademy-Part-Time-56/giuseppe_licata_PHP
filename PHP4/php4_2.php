<?php
/*
class Car {
  private $num_telaio;
}
class Fiat extends Car {
  protected $license;
  protected $name;
}

Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio 1234“.

*/


class Car {
    private $num_telaio;
    
    public function __construct($_telaio)
    {
        $this->num_telaio=$_telaio;
    }

    protected function getNumTelaio() {
      return $this->num_telaio;
    }

  }
  class Fiat extends Car {
    protected $license;
    protected $name;

    public function __construct($_name,$_license,$_telaio)
    {
        parent::__construct($_telaio);
        $this->name=$_name;
        $this->license=$_license;
    }

    public function printCarInfo() {
      echo "La mia macchina è " . $this->name . 
           ", con targa " . $this->license . 
           " e numero di telaio " . $this->getNumTelaio()."\n";
    }   


  }

  $myCar = new Fiat("Opel","ND 123 OJ","1234");
  $myCar->printCarInfo();