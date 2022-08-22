<?php


    $nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];


    try {

        require('phoenix1.php');


        $sql = "INSERT INTO users (prenom, nom, email, mdp)
  VALUES ('$nom', '$prenom', '$email', '$mdp')";
        // use exec() because no results are returned
        $connexion->exec($sql);

        header('location: customer_connection.php');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }


//$connexion = null;


?>
