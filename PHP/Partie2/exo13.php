<h2>Exercice 13</h2>

<p>
    Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et<br>
    vitesseActuelle ainsi que les méthodes démarrer(), accélerer(), et stopper() en plus des<br>
    accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule<br>
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations<br>
    d'un véhicule.<br>
    v1->"Peugeot","408",5<br>
    v2->"Citroën","C4",3<br>
    Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux<br>
    de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et<br>
    les éléments suivants :(voirPDF)<br>
    (Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.).
</p>

<?php


class Voiture {

    private string $marque;
    private string $modele;
    private int $nbPortes;
    private float $vitesseActuelle;
    private bool $isOn;

    public function __construct(string $marque, string $modele, string $nbPortes, $vitesseActuelle = 0, $isOn = false) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle;
        $this->isOn = $isOn;
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

    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    public function getVitesseActuelle()
    {   if ($this->vitesseActuelle <= 0) {

        return "La vitesse du véhicule ". $this. " est de ". $this->vitesseActuelle." km/h<br>";

    } else if ($this->vitesseActuelle < 0) {

        $this->setVitesseActuelle(0);

        return "La vitesse du véhicule ". $this. " est de ". $this->vitesseActuelle." km/h<br>";
    }
}

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function getIsOn()
    {   if ($this->isOn == true) {
        return "Le véhicule ". $this->marque. " est démarré<br>";
    } else if ($this->isOn == false) {
        return "Le véhicule ". $this->marque. " est à l'arrêt<br>";
    }
}

    public function setIsOn($isOn)
    {
        $this->isOn = $isOn;

        return $this;
    }

    public function demarrer() {
        if ($this->isOn == false) {
        $this->setIsOn(true);
        $this->setVitesseActuelle(0);

        return "Le véhicule ". $this. " démarre<br>";
    }   else if ($this->isOn == true) {
        return "Le véhicule ". $this. " est déjà démarré !<br>";
    }
}

    public function accelerer(float $augVit) {

        if ($this->isOn == true) {
            $this->vitesseActuelle .= $augVit;
            return "Le véhicule ". $this. " accélère de " .$augVit. "km/h <br>";

        } else if ($this->isOn == false) {

            return "Le véhicule ". $this. " veut accélérer de " .$augVit." km/h<br>Le véhicule ".$this." doit être démarré !<br>";
        }
    }


    public function stopper() {
        if ($this->isOn == true) {
        $this->setIsOn(false);
        $this->setVitesseActuelle(0);
        return "Le véhicule  ". $this. " est stoppé<br>";
    } else if ($this->isOn == false) {
        return "le véhicule ". $this. " est déjà stoppé<br>";
    }
}

    public function ralentir($vitesse) {

        if ($this->isOn == true && $this->vitesseActuelle  > 0 && $this->vitesseActuelle - $vitesse >= 0) {
            $this->vitesseActuelle -= $vitesse;
            return "Le véhicule ". $this. " décélère de " .$vitesse. " km/h<br>";

        } else if ($this->isOn == true && $this->vitesseActuelle  > 0 && $this->vitesseActuelle - $vitesse < 0) {

            $vit = $this->vitesseActuelle;
            $this->vitesseActuelle -= $this->vitesseActuelle;
            return "Le véhicule ". $this. " veut décélérer de " .$vitesse." km/h, il ne peut décélérer que de " .$vit. " km/h<br>";

        } else if ($this->isOn == false) {

            return "Le véhicule ". $this. " veut décélérer de " .$vitesse." km/h<br>Le véhicule ".$this." doit être démarré !<br>";
        }
    }


    public function getInfos() {

       return "<h2>Infos véhicule</h2>
                **********************************<br>
                <p>Nom et modèle du véhicule : ". $this ."<br>
                Nombre de portes : ". $this->nbPortes. "<br>"
                . $this->getIsOn() . 
                "Sa vitesse actuelle est de : ".$this->vitesseActuelle." km/h<br></p>";             
    }


    public function __toString() {
        return $this->marque." ". $this->modele;
    }
}

$v1 = new Voiture ("Peugeot", "408", 5);
$v2 = new Voiture ("Citroën", "C4", 3);

echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->getVitesseActuelle();
echo $v2->getVitesseActuelle();



echo $v1->ralentir(20);
echo $v1->getVitesseActuelle();
echo $v1->ralentir(100);
echo $v1->getVitesseActuelle();
echo $v1->accelerer(50);
echo $v1->getVitesseActuelle();
echo $v2->ralentir(10);


echo $v1->getInfos();
echo $v2->getInfos();

/*
définir la poo, source : https://www.lemagit.fr/definition/Programmation-orientee-objet
                         https://g-rossolini.developpez.com/tutoriels/php/cours/?page=poo

La programmation orientée objet est un modèle de langage de programmation qui s'articule autour d'objets et de données, plutôt que d'actions et de logique. Par le passé, un programme était une procédure logique qui récupérait des données en entrée, les traitait puis produisait des données en sortie.
L'enjeu de la programmation était d'écrire la logique, pas de définir les données. La programmation orientée objet a changé la perspective : l'important, ce sont les objets à manipuler plutôt que la logique nécessaire à cette manipulation.

définir une class, source : https://vitrinelinguistique.oqlf.gouv.qc.ca/fiche-gdt/fiche/8371487/classe-dobjets#:~:text=Une%20classe%20d'objets%20est,des%20propri%C3%A9t%C3%A9s%20de%20la%20classe.

Une classe d'objets est un moule général sur lequel on crée des objets. Elle se caractérise par ses variables et ses méthodes. Ainsi, lorsqu'on déclare l'appartenance d'un objet à une classe, on le fait hériter automatiquement des propriétés de la classe.

definir objet, source : https://fr.wikipedia.org/wiki/Objet_(informatique)#:~:text=En%20informatique%2C%20un%20objet%20est,programmation%20orient%C3%A9e%20objet%20(POO).

En programmation orientée objet, un objet est créé à partir d'un modèle appelé classe ou prototype, dont il hérite les comportements et les caractéristiques. Les comportements et les caractéristiques sont typiquement basés sur celles propres aux choses qui ont inspiré l'objet : une personne (avec son état civil), un dossier, un produit.

definir l'encapsulation, source : https://www.data-transitionnumerique.com/encapsulation-poo/

Les propriétés des objets ne peuvent être accédées que par ses méthodes. Ainsi, la classe encapsule à la fois les attributs et les méthodes qui permettent de manipuler les objets indépendamment de leurs états.

L’encapsulation permet de restreindre l’accès direct aux états et empêche la modification de l’objet hors de ses méthodes. Par exemple, si vous avez une classe Voiture et que vous voulez définir la valeur de sa propriété couleur à bleu, il vous faut passer par une méthode par exemple definirCouleur, implémentée par le développeur de la classe. Cette méthode peut restreindre les différentes valeurs de couleur.

Ainsi, l’encapsulation est un mécanisme qui empêche donc de modifier ou d’accéder aux objets par un autre moyen que les méthodes proposées, et de ce fait, permet de garantir l’intégrité des objets.

definir une methode magique, source : https://fr.wiktionary.org/wiki/m%C3%A9thode_magique#:~:text=Locution%20nominale,-Singulier&text=(Programmation%20orient%C3%A9e%20objet)%20M%C3%A9thode%20de,quand%20survient%20une%20action%20donn%C3%A9e.

(Programmation orientée objet) Méthode de classe prédéfinie, qui se déclenche automatiquement quand survient une action donnée.
Une méthode magique est une méthode qui, si elle est présente dans votre classe, sera appelée lors de tel ou tel événement. — (Victor Thuillier, Programmez en orienté objet en PHP, Editions Eyrolles, 1 juin 2017)

définir méthode, source : https://fr.wikipedia.org/wiki/M%C3%A9thode_(informatique)#:~:text=En%20programmation%20orient%C3%A9e%20objet%20(POO,de%20la%20classe%20(objet).

En programmation orientée objet (POO), une méthode est une routine membre d'une classe.

Portée de la méthode	Mot-clef (en C++)	Accessible par	                                                                Remarque
Privée	                private	            les membres de la classe seulement	                                            Seul un objet de la classe peut les mettre en œuvre (« appeler ») ; ces méthodes recouvrent généralement le fonctionnement interne de la classe que l'on veut masquer de l'extérieur.
Protégée	            protected	        les membres de la classe et des classes dérivées	                            Seul un objet de la classe ou d'une classe dérivée peut les mettre en œuvre.
Publique	            public	            les membres de la classe et de ses dérivées ainsi que les clients de la classe	c'est-à-dire de tout objet ; ce sont ces dernières qui constituent l'interface de la classe.

*/