<?php if (isset($_POST['search'])) :
    $search = htmlspecialchars($_POST['search']);
    $customers = new customer();
    $customers->search($search);
    //print '<pre>';
    //var_dump($movies);
    //print '</pre>';
?>
    <div class="container">
        <div class="row m-1">
            <?php foreach ($customers->search($search) as $customer) : ?>
                <div class="card col-4 p-2">
                    <div class="card-body">
                        <h4 class="card-title"><?= $customer->first_name ?> <?= $customer->last_name ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $customer->email ?></h6>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="btn btn-success btn-lg" href="index.php?page=customer" role="button">Retourner aux abonnés</a>
    </div>

<?php endif; ?>