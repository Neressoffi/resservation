<?php
include_once "./partials/header.php";
?>

<main class="container-fluid py-3 px-2 py-md-4 px-md-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="" method="get">
                <div class="mt-2">
                    <h3>
                        Categories
                    </h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <label for="category-1">
                                Categorie 1
                            </label>
                            <input type="checkbox" name="category" id="category-1" value="category-1"
                                   class="position-absolute w-100 start-0 top-0 h-100 opacity-0" />
                        </li>
                        <li class="list-group-item">
                            Categorie 2
                        </li>
                        <li class="list-group-item">
                            Categorie 3
                        </li>
                        <li class="list-group-item">
                            Categorie 4
                        </li>
                    </ul>
                </div>
                <div class="mt-3">
                    <h3>
                        Villes
                    </h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Tout voir
                        </li>
                        <li class="list-group-item">
                            Ville 1
                        </li>
                        <li class="list-group-item">
                            Ville 2
                        </li>
                        <li class="list-group-item">
                            Ville 3
                        </li>
                    </ul>
                </div>
                <div class="mt-3">
                    <h3>
                        Capacité
                    </h3>
                    <div>
                        <label for="capacity" class="d-none">
                            Capacité
                        </label>
                        <select name="capacity" id="capacity" class="form-control">
                            <option value="0" selected>
                                Tout voir
                            </option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <h3>
                        Prix maximum
                    </h3>
                    <div>
                        <label for="price" class="d-none">
                            Prix maximum
                        </label>
                        <input type="range" name="price" id="price" class="form-range" max="1000" />
                    </div>
                </div>
                <div class="mt-3">
                    <h3>
                        Période
                    </h3>
                    <div>
                        <div class="form-group">
                            <label for="start_date">
                                Date d'arrivée
                            </label>
                            <input name="start_date" id="start_date" type="text"
                                   placeholder="dd/mm/yyyy" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-outline-secondary">
                        Valider
                    </button>
                </div>
            </form>
        </div>

        <div class="col-lg-9">
            <div class="container px-2 px-lg-4 mt-3">
                <div class="row justify-content-start">
                    <?php
                    include "partials/datas.php";
                    foreach($rooms as $room):
                    ?>
                    <div class="col-md-4 mb-4">
                        <?php include "partials/single-room.php"; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    window.addEventListener('load', () => {
      let category = document.getElementById('category-1');
      if (category) {
        category.addEventListener('change', (e) => {
          console.log(e.target.checked)
        })
      }
    })
</script>
<?php include_once "./partials/footer.php"; ?>
