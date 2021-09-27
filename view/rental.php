<?php

if (isset($_POST['rent'])) :
    $customers = new customer();
    $customers->findAll(); ?>

    <div class="container">
        <div class="row">
            <form class="d-flex justify-content-between align-items-end">
                <div class="form-group m-2">
                    <label for="datetime" class="form-label mt-4">Entrer une date et heure</label>
                    <input name="" type="datetime-local" class="form-control" aria-describedby="datetime">
                </div>
                <div class="form-group m-2">
                    <label for="customer" class="form-label mt-4">Choisissez l'abonné</label>
                    <select class="form-select">
                        <?php foreach ($customers->findAll() as $customer) : ?>
                            <option name="customer" value="<?= $customer->customer_id ?>"><?= $customer->last_name ?> <?= $customer->first_name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <input name="rent" class="btn btn-success m-2" type="submit" value="Louer"></input>
            </form>
        </div>
        <a class="btn btn-warning btn-lg m-2 text-center" href="index.php?page=movie" role="button">Abandonner</a>
    </div>
<?php endif; ?>