<?php

$customers = new customer();
$customers->findAll();

?>

<div class="container">
    <form class="col-4 m-auto mt-2" action="index.php?page=customersSearch" method="POST">
        <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" placeholder="Taper un email" aria-label="Recipient's username" aria-describedby="button-addon2">
            <input class="btn btn-primary" type="submit" value="rechercher"></input>
        </div>
    </form>
    <div class="row m-1">
        <?php foreach ($customers->findAll() as $customer) : ?>
            <div class="card col-4 p-2">
                <div class="card-body">
                    <h4 class="card-title"><?= $customer->last_name ?> <?= $customer->first_name ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $customer->email ?></h6>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>