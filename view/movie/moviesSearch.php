<?php if (isset($_POST['search'])) :
    $search = htmlspecialchars($_POST['search']);
    $movies = new movie();
    $movies->search($search);
    //print '<pre>';
    //var_dump($movies);
    //print '</pre>';
?>
    <div class="container">
        <div class="row m-1">
            <?php foreach ($movies->search($search) as $movie) : ?>
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
            <a class="btn btn-warning btn-lg col-4" href="index.php?page=movie" role="button">Retourner aux films</a>
        </div>
    </div>
<?php endif; ?>