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
$sql = $bdd->prepare("INSERT INTO user (id,username,password,email)
                VALUES ('1','Doe','sam','Eby','test@coucou.com')");

$sql2 = $bdd->prepare("INSERT INTO role (id,blanc)
                VALUES ('1','rouge')");



require_once 'exer_204.php';
$request = $bdd->prepare("
    SELECT
            user.id, username.id, user.email, user.password, user.email 
            FROM JOIN user_fk ON user.role = user.user_fk
");

$request->execute();
echo "<pre>";
print_r($request->fetchAll());
echo "</pre>";


