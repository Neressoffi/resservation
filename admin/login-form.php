<?php

require_once('functions/config.php');

if (!empty($_POST)) {
    $email=$_POST['email'];
    $password=$_POST['password'];    
    $sql = "SELECT * FROM user where email='$email'";
    $result = $bdd->prepare($sql);
    $result->execute();
    $success = false;
    if ($user = $result->fetch()) {
        $success = password_verify($password, $user->password);
    }

    if ($success) {
        echo "Utilisateur connecte";
    } else {
        echo "Utilisateur ou mot de passe incorect";
    }
}
