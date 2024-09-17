<?php
session_start();                //source : https://www.php.net/manual/fr/intro.session.php)
ini_set('display_errors', 0);   //eviter affichage erreurs inutiles ini_set('display_errors', 0);
                                //source GitHub, codes équivalents comme inspiration
                                //source premiers cours Elan en PHP
                                //source https://www.php.net/manual/fr/control-structures.switch.php
                                //source https://www.w3schools.com/pHp/php_looping_break.asp

$qtProduits = 0;

if(isset($_GET['action'])){
    switch($_GET['action']){    //switch case selon les actions de l'utilisateur (différents boutons possibles)
                                //Equivalent de la gestion d'un 'panier d'acaht' par l'utilisateur

        case "addProduct":      //Ajout d'un produit

                        if(isset($_POST["submit"])){        //Nous vérifions alors l'existence de la clé "submit" dans le tableau $_POST
                                                            //La condition sera alors vraie seulement si la requête POST transmet bien une clé "submit" au serveur
                                                            // FILTER_SANITIZE_STRING (champ "name") : ce filtre supprime une chaîne de caractères de toute présence de caractères spéciaux et de toute balise HTML potentielle ou les encode. Pas d'injection de code HTML possible !
                                                            // FILTER_VALIDATE_FLOAT (champ "price") : validera le prix que s'il est un nombre à virgule (pas de texte ou autre…), le drapeau FILTER_FLAG_ALLOW_FRACTION est ajouté pour permettre l'utilisation du caractère "," ou "." pour la décimale.
                                                            // FILTER_VALIDATE_INT (champ "qtt") : ne validera la quantité que si celle-ci est un nombre entier différent de zéro (qui est considéré comme nul).

                            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS); //fonction dépréciée, source : https://www.w3schools.com/php/filter_sanitize_special_chars.asp
                            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT,  FILTER_FLAG_ALLOW_FRACTION); //permet de filtrer les données pour éviter de saisir des informations indsirables
                            $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

                        if($name && $price && $qtt) {            
                            $product = [
                                "name" => $name, //attention à la syntaxe -> n'est pas => (tableau associatif)
                                "price" => $price,
                                "qtt" => $qtt,
                                "total" => $price*$qtt
                            ];
                            $_SESSION['products'][] = $product;
                            $_SESSION['message'] = "Produit enregistré avec succès !";
                            $_SESSION['message_time'] = time();                  
                                                    }
                            else $_SESSION['message'] = "Vous devez soumettre le formulaire !";
                            $_SESSION['message_time'] = time();} //horodatage           
        break; //Fin du switch sinon bouclage infini / The break statement can be used to jump out of different kind of loops.

//--------------------------------------------------------------------------------------------------------------------------------------
        case "deleteAll":  //Suppression de tous les produits de la session, remise à zéro complet de l'array

                        if(isset($_SESSION['products'])){
                            unset($_SESSION['products']); //commande de suppression totalité des produits de la session
                            $_SESSION['message'] = "Votre panier est vide!";
                            $_SESSION['message_time'] = time();} //horodatage
        break; //Fin du switch sinon bouclage infini / The break statement can be used to jump out of different kind of loops.

//--------------------------------------------------------------------------------------------------------------------------------------
        case "delete": //Suppression d'un produit ou d'un objet du tableau
                            if(isset($_GET['id'])){
                                $id = ($_GET['id']);
                                                  }
                            if(isset($_SESSION['products'])){              //commande 'unset' supprime objet/enregistrement ici
                                unset($_SESSION['products'][$_GET['id']]);
                                $_SESSION['message'] = "Produit supprimé avec succès!";
                                $_SESSION['message_time'] = time(); //horodatage
                                header("Location:recap.php");
                                exit();
                            }
        break; //Fin du switch sinon bouclage infini / The break statement can be used to jump out of different kind of loops.

//--------------------------------------------------------------------------------------------------------------------------------------
        //les case "up-qtt" et "down-qtt" sont des +/- placés de part et d'autre sur chaque ligne du tableau, le chgt de qt se fera directement dans l'array

        case "up-qtt": //Incrementation ou augmentation de quantité de produit dans l'array ['qtt']++ avec recalcul automatique $_SESSION['products'][$_GET['id']]['price'] * $_SESSION['products'][$_GET['id']]['qtt']
                            if(isset($_GET['id'])){
                                $id = ($_GET['id']);
                            }
                            if(isset($_SESSION['products'][$_GET['id']]['qtt'])){
                                $_SESSION['products'][$_GET['id']]['qtt']++;
                                $_SESSION['products'][$_GET['id']]['total'] = $_SESSION['products'][$_GET['id']]['price'] * $_SESSION['products'][$_GET['id']]['qtt'];
                                header("Location:recap.php");
                                exit();
                            }
        break; //Fin du switch sinon bouclage infini / The break statement can be used to jump out of different kind of loops.

//--------------------------------------------------------------------------------------------------------------------------------------
        case "down-qtt": //Diminution de la quantité du produit ['qtt']-- avec recalcul automatique
                            if(isset($_GET['id'])){
                                $id = ($_GET['id']);
                            }
                            if(isset($_SESSION['products'][$_GET['id']]['qtt'])) {
                            if($_SESSION['products'][$_GET['id']]['qtt'] > 1){
                            $_SESSION['products'][$_GET['id']]['qtt']--;
                            $_SESSION['products'][$_GET['id']]['total'] = $_SESSION['products'][$_GET['id']]['price'] * $_SESSION['products'][$_GET['id']]['qtt'];
                            header("Location:recap.php");
                            exit();
                            }
                            else
                            unset($_SESSION['products'][$_GET['id']]);
                            header("Location:recap.php");
                            exit();              
                            }
        break; //Fin du switch sinon bouclage infini / The break statement can be used to jump out of different kind of loops.

//--------------------------------------------------------------------------------------------------------------------------------------
        } //Fin de tous les switch-case : switch($_GET['action'])
        } //Fin de if(isset($_GET['action']))
                                       
header("Location:index.php"); //redirection vers index.php si on tente de se connecter à traitement.php directement via un navigateur
                              //la redirection est active quoiqu'il arrive

