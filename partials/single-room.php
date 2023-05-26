<?php if (isset($room)): ?>
    <div class="card h-100">
        <a href="/rooms.php?id=<?= $room['id']; ?>">
            <img class="card-img" src="<?= $room['image']; ?>" />
        </a>
        <div class="card-body p-2">
            <div class="d-flex justify-content-between">
                <!-- Product name-->
                <h5 class="fw-bolder">
                    <?= $room['name']; ?>
                </h5>
                <span>
                    <?= $room['price']; ?> €
                </span>
            </div>
            <p class="text-ellipsis w-100" style="height: 100px;">
                <?= $room['description']; ?>
            </p>
            <i class="bi bi-calendar2-event-fill"></i>
            <?= $room['dates']['start_date']; ?>
            au
            <?= $room['dates']['end_date']; ?>
        </div>
        <div class="card-footer bg-transparent px-2 border-top-0">
            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star"></div>
                    <div class="bi-star"></div>
                </div>

                <a class="text-decoration-none" href="/rooms.php?id=<?= $room['id']; ?>">
                    <i class="bi bi-search"></i>
                    Voir
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>
