<?php

$query = new Film();
$films = $query->getAll();
?>

<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Action(s)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($films as $film) : ?>
                <tr class="table-light">
                    <th scope="row"><?php echo $film['title']; ?></th>
                    <td><?php echo $film['description']; ?></td>
                    <td><a href="film.php" class="btn btn-primary">En Savoir Plus</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>