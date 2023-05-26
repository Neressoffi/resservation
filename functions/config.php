<?php

try {
    $bdd = new \PDO("mysql:host=localhost;dbname=loutassal", "root", "");
    $bdd->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
    $bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
} catch(\PDOException $e) {
    die('Erreur: '.$e->getMessage());
}

function getUsers($role = null)
{
    global $bdd;
//    $sql = 'SELECT * FROM users left join roles ON users.id_role_user = roles.id_role';
    $sql = 'SELECT * FROM user';
//    if ($role) {
//        $sql .= ' WHERE roles.name_role = ?';
//        $params = [$role];
//    }
    $query = $bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function getCategories()
{
    global $bdd;
    $sql = 'SELECT * FROM categories';
    $query = $bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}
