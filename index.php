<?php
$servername = "fdb1030.awardspace.net"; // adresse du serveur de la base de données
$username = "4284065_wordpress"; // nom d'utilisateur de la base de données
$password = "ankazo102"; // mot de passe de la base de données
$dbname = "4284065_wordpress"; // nom de la base de données

// Création d'une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données!";
}

// Fermeture de la connexion
$conn->close();
?>
