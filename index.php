<?php

/*
 * 1 - Uniquement pour la pratique, reproduisez via mysql workbench le schémas proposé.
 * 2 - Exportez le résultat de manière à créer les tables en base
 * de données.
 * 3 - Ajoutez des utilisateurs, des rôles et ajoutez des données
 *  dans la table user_role ( attention, au moins un utilisateur
 *  doit avoir deux rôles au moins ).
 * 4 - A l'aide d'un simple print_r, afficher les rôles de
 * chaque utilisateur.
 * 5 - FIN !
 */

$server = 'localhost';
$db = 'exer_204';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);

require_once 'db.php';
$request = $conn ->prepar("
    SELECT 
        

");