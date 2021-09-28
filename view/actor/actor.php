<?php
$actors = new actor();
$actors->findAll();
?>

<div class="container">
    <div class="row m-1">
        <?php foreach ($actors->findAll() as $actor) : ?>
            <div class="card col-4 p-2 m-0">
                <h3 class="card-header"><?= $actor->last_name ?></h3>
                <div class="card-body">
                    <h6 class="card-subtitle text-muted"><?= $actor->first_name ?></h6>
                    <a href="index.php?page=moviesByActor&actor_id=<?= $actor->actor_id; ?>" class="card-link">Voir les films</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>