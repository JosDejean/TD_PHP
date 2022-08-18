<p> Bonjour

<?php
echo  $_POST [ 'Prenom'];
?>
    , connecte toi!</p>

<form method="post" action="contact.php">

    <label for="Email">Email</label>
    <input type="text" id="Email" name=" Email"> <br>

    <label for="MDP">MDP</label>
    <input type="text" id="MDP" name="MDP"> <br>

    <input type="submit" value="envoyer">


</form>
