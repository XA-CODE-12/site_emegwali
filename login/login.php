<?php
// Connexion à la base de données
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "votre_base_de_données";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Requête SQL pour vérifier les informations d'authentification
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Vérification si l'utilisateur existe dans la base de données
if ($result->num_rows > 0) {
    // Authentification réussie
    echo "Login successful!";
} else {
    // Authentification échouée
    echo "Invalid username or password!";
}

$conn->close();
?>
