<?php
$title = "Connexion";
include_once "./partials/header.php";
?>

<div class="login-form">
    <form action="login-form.php" method="post">
        <h2 class="text-center">
            Authentification
        </h2>
        <div class="form-group">
            <input type="email" name="email" class="form-control"
                   placeholder="Email" autocomplete="email" required/>
        </div>
        <div class="form-group mt-2">
            <input type="password" name="password" class="form-control"
                   placeholder="********" required/>
        </div>
        <div class="form-group mt-4 d-flex">
            <button type="submit" class="btn btn-primary btn-block mx-auto">
                Connexion
            </button>
        </div>
    </form>
    <p class="text-center">
        <a href="register.php">
            Inscription
        </a>
    </p>
</div>

<?php include_once "./partials/footer.php"; ?>

