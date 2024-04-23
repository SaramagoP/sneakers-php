<?php
// Connexion à la base de données
$pdo  = new PDO(
    'mysql:host=localhost; dbname=exercice', // Adresse du serveur MySQL et nom de la base de données
    'root', // Nom d'utilisateur MySQL
    '', // Mot de passe MySQL
    [ // Options de connexion
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Affichage des erreurs en mode avertissement
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Définition du jeu de caractères à UTF-8
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Mode de récupération par défaut des résultats en tableau associatif
    ]
);

// Démarrage de la session PHP
session_start();
