<h2>Exercice 14</h2>

<p>
    Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec<br>
    qui hérite (extends) de la classe Voiture et qui a une copriété supplémentaire (autonomoie).<br>
    Instancier une voiture "classique" et une voiture "electrique" ayant les caractéristiques suivantes :<br>
    - Peugeot 408:$v1 = new Voiture("Peugeot","408");<br>
    - BMW i3 150:$ve1 = new VoitureElec("BMW","I3",100);<br>
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br>
    echo $v1->getInfos()."<br/>";<br>
    echo $ve1->getInfos()."<br/>";<br>
</p>

<?php

class Voiture {

    protected string $marque;
    protected string $modele;

    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    public function getInfos() {
        return "<h2>Infos véhicule</h2>
        *********************<br>
        <p>Marque : ". $this->marque."<br>
        Modèle : ". $this->modele."<br>";
    }

    public function __toString() {
        return $this->marque." ".$this->modele;
    }
}

class VoitureElec extends Voiture {

    private int $autonomie;


  public function __construct(string $marque, string $modele, int $autonomie) {

        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }
 
    public function getAutonomie()
    {
        return $this->autonomie;
    }

    public function setAutonomie($autonomie)
    {
        $this->autonomie = $autonomie;

        return $this;
    }

    public function getInfos() {
        return parent::getInfos()."
        Autonomie : ".$this->autonomie."<br></p>";
    }

    public function __toString() {
        parent::__toString();
    }

}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

echo $v1->getInfos(). "<br>";
echo $ve1->getInfos(). "<br>";


/* FROM https://www.w3schools.com/PHP/php_oop_inheritance.asp

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();

  */