<?php
$title = "Salles";
include_once "partials/datas.php";

$room = null;
foreach ($rooms as $r) {
    if ($r['id'] == $_GET['id']) {
        $room = $r;
        break;
    }
}

//array_map()
//$room_ids = array_column($rooms, 'id');
//$id = array_search($_GET['id'], $room_ids);
//$room = $id ? $rooms[$id] : null;

include_once "partials/header.php";
?>

<main class="container px-4 px-lg-5">

    <?php
        if ($room):
    ?>
    <!-- Heading Row-->
    <div class="row my-5 justify-content-between">
        <!-- Product name-->
        <h5 class="fw-bolder">
            <?= $room['name']; ?>
        </h5>

        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="img/restoa.jpg" /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Business Name or Tagline</h1>
            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
            <a class="btn btn-primary" href="#!">Reservation</a>
        </div>
    </div>

    <!-- Content Row-->
    <div class="row mt-5 py-5">
    <?php
        include "partials/datas.php";
        $rooms_length = min(count($rooms), 4);
        for($i = 0; $i < $rooms_length; $i++):
            $room = $rooms[$i];
            ?>
            <div class="col-md-3 mb-4">
                <?php include "partials/single-room.php"; ?>
            </div>
        <?php endfor; ?>
    </div>
    <?php else: ?>
        <p>
            Page not found
        </p>
    <?php endif; ?>
</main>

<?php include_once "partials/footer.php"; ?>
