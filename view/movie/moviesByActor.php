<?php

$actor_id = $_GET["actor_id"];
$movies = new movie();
$movies->findbyActors($actor_id);

?>
<div class="container">
    <form class="col-4 m-auto mt-2" action="index.php?page=moviesSearch" method="POST">
        <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" placeholder="Titre du film" aria-label="Recipient's username" aria-describedby="button-addon2">
            <input class="btn btn-primary" type="submit" value="rechercher"></input>
        </div>
    </form>
    <div class="row m-1">
        <?php foreach ($movies->findbyActors($actor_id) as $movie) : ?>
            <div class="card col-4 p-2 m-0">
                <h3 class="card-header"><?= $movie->title ?></h3>
                <div class="card-body">
                    <p class="card-text"><?= $movie->description ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Durée du film : <?= $movie->length ?> minutes</li>
                    <li class="list-group-item">Année de sortie : <?= $movie->release_year ?></li>
                </ul>
                <div class="card-body text-end">
                    <form action="index.php?page=rental" method='POST'>
                        <?php if (empty($movie->rental_date)) : ?>
                            <button class="btn btn-success float-right">Louer ce film</button>
                        <?php else : ?>
                            <button class="btn btn-warning float-right">Rendre ce film</button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>