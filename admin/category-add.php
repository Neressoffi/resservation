<?php
include_once "../functions/config.php";

$errors = [];
$values = [];
if(isset($_POST) && !empty($_POST)) {
    $datas = array_map('trim', $_POST);
    $datas = array_map('htmlentities', $datas);
    $datas = array_map('strip_tags', $datas);
    $datas = array_map('stripslashes', $datas);
    $datas = array_map('htmlspecialchars', $datas);

    if (!isset($datas['name'])) {
        $errors['name'] = 'Le champ `nom de la categorie` est obligatoire';
    }

//    if (!isset($datas['start_date'])) {
//        $errors['start_date'] = 'Le champ `start_date` est obligatoire';
//    } elseif (isset($datas['start_date']) && !empty($datas['start_date'])) {
//        $date = date_create_from_format('Y-m-d', $datas['start_date']);
//        if ($err = date_get_last_errors()) {
//            if ($err['warning_count'] > 0) {
//                $errors['start_date'] = 'Ce champ `start_date` est une date incorrecte !';
//            } else {
//                $dateYear['Y'] = $date->format('Y');
//                $dateYear['m-Y'] = $date->format('m-Y');
//            }
//        }
//    }
    $categoryQuery = $bdd->prepare("INSERT INTO categories (name) VALUES (:name)");
    $categoryQuery->bindParam(':name', $datas['name']);
    if($categoryQuery->execute()) {
//        $category['id'] = $bdd->lastInsertId();
//        $category['name'] = $datas['name'];
        $values['success'] = 'L\'ajout a ete fait avec succes';
    } else {
        $errors['action'] = 'Une erreur innatendue s\'est produite';
    }

    if (!empty($errors)) {
        $values['name'] = $datas['name'];
    }
}

include_once '../partials/header.php';
?>

<div class="container py-5">
    <div class="row">
        <h2>
            Ajouter une nouvelle categorie
        </h2>
        <div class="card col-md-5 py-3">
            <form action="" method="POST">
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger">
                        <ul class="space-y-1">
                            <?php foreach ($errors as $error): ?>
                                <li>
                                    <?= $error; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php elseif (isset($values['success'])): ?>
                    <div class="alert alert-success">
                        <?= $values['success'] ?? ''; ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="name" class="form-label">
                        Nom de la categorie
                    </label>
                    <input class="form-control" placeholder="Reunion" type="text" id="name"
                           name="name" value="<?= $values['name'] ?? ''; ?>" required />
                </div>

                <div class="form-group d-flex justify-content-end mt-4">
                    <button class="btn btn-primary" name="submit" type="submit">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once '../partials/footer.php'; ?>
