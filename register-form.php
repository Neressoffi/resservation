<?php

require_once('functions/config.php');

if (!empty($_POST)) {
    $password=$_POST['password'];    
    $email=$_POST['email'];
    $username=$_POST['username'];
    $sql = "SELECT * FROM user where email='$email'";
    $result = $bdd->prepare($sql);
    $result->execute();
    if ($result->fetch()) {
      echo "utilisateur existe déjà";
    } else {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql="INSERT INTO user (email, password, username, title) VALUES ('$email', '$password', '$username', '')";
        $req=$bdd->prepare($sql);
        if ($req->execute()) {
            echo "Enregistrement effectué";
        } else {
            echo "Erreur innatendue";
        }
    }
}
