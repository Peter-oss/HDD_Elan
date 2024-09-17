<?php
class Caniche
{
    private $nbPattes;

    public function __construct()
    {
        $this->nbPattes = 4;
    }
}

$froufrou = new Caniche();
echo $froufrou->nbPattes; //illégal depuis l'extérieur de la classe

/*
Fatal error: Cannot access private property Caniche::$nbPattes
    in C:\Web\online\http\tests\error.php on line 8
*/