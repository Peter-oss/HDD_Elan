<?php

//COURS Programmation Orientée Objet

/*
La programmation orientée objet (POO) en PHP est une méthode puissante pour structurer et organiser votre code. Voici quelques concepts clés :

Classes et Objets : Une classe est un modèle pour créer des objets. Un objet est une instance d’une classe.
Propriétés et Méthodes : Les propriétés sont des variables définies dans une classe, et les méthodes sont des fonctions définies dans une classe.
Héritage : Permet à une classe de hériter des propriétés et méthodes d’une autre classe.
Encapsulation : Restreint l’accès à certaines parties d’un objet pour protéger l’intégrité des données.
Polymorphisme : Permet aux objets de différentes classes de répondre à la même méthode de manière différente.
Pour commencer avec la POO en PHP, vous pouvez consulter des ressources comme le cours sur OpenClassrooms1 ou les tutoriels de Pierre Giraud2.
*/

//Exemple de classe : commence toujours par le mot class
//la classe est la definition et l'objet l'instanciation
//L' instanciation est le processus qui consiste à lire ou à spécifier des informations, telles que le type de stockage ou les valeurs d'un champ de données. Afin d'optimiser les ressources système, l'instanciation est gérée par l'utilisateur.

Class Ordinateur{

    private $_marque;                       //attributs et methodes, les attributs commencent par un underscore
    private $_modele;                       //private, public ou restricted
    private $_ecran;
    private $_statut = 0;                   //machine éteinte
    public function allumer(){
    $this->_statut = 1;                     //méthode faire passer statut à 1, en phase de démarrage
}                                           //this fait reference à l'instance en cours
}
$poste = new Ordinateur("peugeot", "");       //$poste instancie (crée) un objet de classe Ordinateur
$poste->allumer();                          //On allume cet ordinateur $poste en appelant sa méthode allumer
                                            //on parle de méthode dès qu'une fonction est associée à un objet
                                            //les fonctions s'appliquent à l'obej
//Remarques
/*
Private :   un élément privé est uniquement accessible depuis la classe où il est déclaré
Public :    un élément public sera accessible depuis n’importe où dans l’application
Protected : un élément protégé n’est visible que dans la classe où il est déclaré et dans les autres classes héritant de celle-ci (voir Héritage)
*/

//Le constructeur

Class Ordinateur1{

    private $_marque;
    public function __construct($marque){   //Le constructeur d'une classe a pour rôle principal d'initialiser, précdé de 2 underscore
    $this->_marque = $marque;
    }
    }
$poste = new Ordinateur("Samsung");         //crééra un objet Ordinateur de marque Samsung

//Manipuler éléments de l'objet

//getter

//Seules des méthodes publiques de cette classe doivent permettre de les modifier et de les récupérer.
//Un accesseur (getter) est une méthode qui permet de récupérer un attribut de l’objet instancié, cette méthode porte par convention le préfixe get.

//ordinateur.class.php

/*

Class Ordinateur2{
    private $_marque;
    public function __construct($marque){
    $this->_marque = $marque;
    }
    public function getMarque(){
    return $this->_marque;
    }
    }
$poste = new Ordinateur("Samsung");
echo $poste->getMarque(); //affichera "Samsung"

//setter

//Un mutateur (setter) est une méthode qui permettra la modification d'un attribut, et uniquement cela (en d'autres termes, elle ne renvoie aucune information).

//ordinateur.class.php
Class Ordinateur3{
    private $_marque;
    private $_cpuClock;
    public function __construct($marque, $cpuClock){
    $this->_marque = $marque;
    $this->_cpuClock = $cpuClock;
    }
    public function getMarque(){
    return $this->_marque;
    }
    public function getCpuClock(){
    return $this->_cpuClock;
    }
    public function setCpuClock($speed){
    $this->_cpuClock = $speed;
    }
    }
    //l'objet est instancié avec un processeur de 2.4 GHz
    $poste = new Ordinateur("Samsung", 2.4);
    $poste->setCpuClock(3);
    echo $poste->getCpuClock()." GHz"; //affichera "3 GHz"

//constantes

//ordinateur.class.php
Class Ordinateur4{
    private $_marque;
    private $_cpuClock;
    private $_hdd;
    const HDD_SMALL = "250Go";              //constante
    const HDD_MEDIUM = "500Go";             //constante
    const HDD_BIG = "1To";                  //constante
    public function __construct($marque, $cpuClock){
    $this->_marque = $marque;
    $this->_cpuClock = $cpuClock;
    }
    public function getHdd (){
    return $this->_hdd;
    }
    public function setHdd($capacite){
    // On vérifie qu'on nous donne bien une des trois capacités prédéfinies plus haut.
    if (in_array($capacite, [self::HDD_SMALL, self::HDD_MEDIUM, self::HDD_BIG])){
    $this->_hdd = $capacite;
    }
    }
    }
    //l'objet est instancié avec un processeur de 2.4 GHz et on y installe un petit disque dur
    $poste = new Ordinateur("Samsung", 2.4);
    $poste->setHdd(Ordinateur::HDD_SMALL);
    echo "Le disque dur est d’une capacité de ".$poste->getHdd() ; //affiche 250Go

    //Les attributs et méthodes statiques

    Class Ordinateur5{
        private $_marque;
        private $_cpuClock;
        private static $_nbPostes = 0;//attribut statique
        public function __construct($data){
        $this->_marque = $data[0];
        $this->_cpuClock = $data[1];
        self::$_nbPostes++;//le compteur est incrémenté, self est utilisé car independant de la class ordinateur
        }
        public function setMarque($marque){
        $this->_marque = $marque;
        }
        public function setCpuClock($speed){
        $this->_cpuClock = $speed;
        }
        public static function combien(){//méthode statique
        echo self::$_nbPostes."<br/>";
        }
        }
        Ordinateur::combien();//affiche 0
        $poste = new Ordinateur(array("Samsung", 2.4));
        $poste2 = new Ordinateur(array("Hitachi", 1.6));
        Ordinateur::combien();//affiche 2

//Objets et BDD

//Hydrater un objet

//C'est ainsi que l'on nomme l'action de récupérer des valeurs stockées et de les injecter dans un objet.

$dsn = 'mysql:dbname=park;host=localhost';
$user = 'root';
$password = '';
try {
$db = new PDO($dsn, $user, $password);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
echo 'Connexion échouée : ' . $e->getMessage();
}

//Les étapes de l'hydratation d'un objet

Class Ordinateur6{
    private $_marque;
    private $_cpuClock;
    //…
    public function __construct($valeurs = array()){
    if(!empty($valeurs))
    $this->hydrate($valeurs);
    }
    public function hydrate(array $donnees) {
    foreach($donnees as $attribut => $valeur) {
    $methode = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));
    if(is_callable(array($this, $methode))){
    $this->$methode($valeur);
    }
    }
    }
    //…
    public function setMarque($marque){
    $this->_marque = $marque;
    }
    public function setCpuClock($speed){
    $this->_cpuClock = $speed;
    }
    //…
    }

    Class OrdinateurManager{
        private $_db;//l'objet PDO créé par le fichier dbconnect.php
        public function __construct($db){
        $this->setDb($db);
        }
        public function getList(){
        $postes = [];
        $q = $this->_db->query('SELECT id, marque, modele
        FROM ordinateur
        ORDER BY marque');
        while ($data = $q->fetch()){
        $postes[] = new Ordinateur($data);
        }
        return $postes;
        }
        public function setDb(PDO $db){
        $this->_db = $db;
        }
        }

//Ci-dessous, le code très simple d'un fichier qui va, grâce à var_dump(), afficher les instances de la classe Ordinateur créées à partir de la base de données :

require_once("lib/dbconnect.php");//le fichier de connexion à la BDD
require_once("ordinateur.class.php");//la classe Ordinateur
require_once("ordinateurManager.class.php");//le manager
$manager = new OrdinateurManager($db);
$postes = $manager->getList();
var_dump($postes);

//pattern mvp

/*
Le manager ci-dessous est très simple, mais si vous avez tout suivi, il est un modèle selon le pattern MVC ! C'est lui qui aura pour rôle d'ajouter, supprimer, modifier un ordinateur de la base, entre autres manipulations possibles. Conclusion : chaque manipulation nécessaire sera une méthode de la classe OrdinateurManager !!
*/
/*
Class OrdinateurManager2{
    private $_db; //l'objet PDO créé par le fichier dbconnect.php
    public function __construct($db){
    $this->setDb($db);
    }
    public function getList(){
    $postes = [];
    $q = $this->_db->query('SELECT id, marque, modele
    FROM ordinateur
    ORDER BY marque');
    while ($data = $q->fetch()){
    $postes[] = new Ordinateur($data);
    }
    return $postes;
    }
    public function setDb(PDO $db){
    $this->_db = $db;
    }
    }

//afficher les instances de la classe Ordinateur créées à partir de la base de données

require_once("lib/dbconnect.php");//le fichier de connexion à la BDD
require_once("ordinateur.class.php");//la classe Ordinateur
require_once("ordinateurManager.class.php");//le manager
$manager = new OrdinateurManager($db);
$postes = $manager->getList();
var_dump($postes);

//affichage à l'écran
/*
Ordinateur n°2
object(Ordinateur)[4]
private '_id' => string '2' (length=1)
private '_marque' => string 'Asus' (length=4)
private '_modele' => string 'ROG240' (length=6)
private '_cpuClock' => null
private '_ecran' => null
private '_hdd' => null
private '_statut' => int 0

Ordinateur n°1
object(Ordinateur)[5]
private '_id' => string '1' (length=1)
private '_marque' => string 'Samsung' (length=7)
private '_modele' => string 'PC24' (length=4)
private '_cpuClock' => null
private '_ecran' => null
private '_hdd' => null
private '_statut' => int 0
*/

//Autoload
/*
function chargerClasse($classe){
    require $classe . '.class.php';
    }
    spl_autoload_register('chargerClasse');

//Héritage

//L’héritage en POO est une notion très puissante : en somme, des classes vont dépendre d’autres classes, pour nous faciliter la vie. Imaginons deux classes, Mac et PC, qui héritent de notre classe Ordinateur. Par définition :
//ex Mac et PC héritent de l'ordinateur

Class Ordinateur7{
    //…
    private static $_nbPostes = 0;
    //…
    }
    Class PC extends Ordinateur{    //mise en place heritage
    private $_windows;
    public function __construct($data, $windows){
    parent::__construct($data);
    $this->_windows = $windows;
    }
    }
    Ordinateur::combien();//affiche 0
    $poste = new Ordinateur(array("marque" => "Samsung", "cpuClock" => 2.4));
    $poste2 = new PC(array("marque" => "Hitachi", "cpuClock" => 1.6), "Vista");
    Ordinateur::combien();//affiche 2

    //Class PC extends Ordinateur8{
        private $_windows;
        public function __construct($windows){
        $this->_marque = "no name";//on essaie de modifier l’attribut $_marque de la classe mère
        $this->_windows = $windows;
        }
        }
        $poste = new PC("Vista");
        $poste->getMarque();//n’affiche rien du tout !
    
//Notions importantes
//Une classe abstraite (abstract) est une classe dont on interdit l’instanciation directe
//Une classe finale (final) est, à contrario, une classe dont on interdit l’héritage

//Méthodes magiques

/*
Sous cette dénomination se regroupent toutes les méthodes préexistantes qu’une classe peut implémenter. Une méthode magique sera appelée lorsqu’un évènement particulier se produira au sein d’une classe. Vous en avez déjà vu une, d’ailleurs : la méthode __construct().
*/

