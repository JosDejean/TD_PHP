<?php
$veriflog = '';

$email = $_POST ['email'];
$mdp = $_POST ['mdp'];
require 'phoenix1.php';


$sqlQuery = "SELECT email, mdp FROM users WHERE email='$email' AND mdp='$mdp'";

$loggin = $connexion->prepare($sqlQuery);
$loggin->execute();
$loggedusers = $loggin->fetchAll();

/*foreach ($loggedusers as $loggeduser) {
    ?>
    <p><?php

        echo ' '.$loggeduser['email']. ' ' .$loggeduser['mdp']. ' ';
    ?>
    </p>
    <?php
}*/


try {
    if (!empty($loggedusers)) {
        $veriflog = true;
    } else {
        $veriflog = false;
    }

}
catch  (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}


echo $veriflog;




try {

    if ((!empty ($email)) and (!empty($mdp)) and $veriflog == true) {


        echo 'vous êtes connectés';
    } else {

        echo 'votre connection à échouéé';
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}








?>