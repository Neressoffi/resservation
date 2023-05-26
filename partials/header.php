<?php
include_once dirname(__DIR__ ). "/functions/config.php";
$title = !isset($title) ? 'Loutassal - Accueil' : 'Loutassal - ' . $title;
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="loutassal" />
    <title>
        <?= $title; ?>
    </title>
    <!-- Favicon-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="<?= '/css/styles.css'; ?>" rel="stylesheet" />
    <link href="<?= '/css/main.css'; ?>" rel="stylesheet" />
</head>
<body>
<header>

<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="/index.php">
            Loutassal
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                    if (isset($user)):
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hello <?= $user->name; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="/history.php">
                                Mes Reservations
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/profile.php">
                                Mon compte
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider"/>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/logout.php">
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </li>

                <?php
                    else:
                ?>

                <li class="nav-item">
                    <a class="nav-link" href="/login.php">
                        Connexion
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register.php">
                        Inscription
                    </a>
                </li>

                <?php
                    endif;
                ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Header-->

</header>
