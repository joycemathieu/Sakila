<?php

$categories = new category($category_id = '', $name = '');
$categories->findAll();
?>

<div class="container">
    <div class="row m-1">
        <?php foreach ($categories->findAll() as $category) : ?>
            <div class="card col-4 p-2 m-0">
                <h3 class="card-header"><?= $category->name ?></h3>
                <div class="card-body text-center">
                    <a class='btn btn-primary' href="index.php?page=moviesByCat&category_id=<?= $category->category_id; ?>">Voir les films</i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>