<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
  <title>Sakila</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?page=home">SAKILA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=movie">Films</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=category">Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=actor">Acteurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=customer">Abonnés</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ajouter ou supprimer</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Ajouter un abonné</a>
            <a class="dropdown-item" href="#">Ajouter un film</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Supprimer un abonné</a>
            <a class="dropdown-item" href="#">Supprimer un film</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?= $content; ?>

<footer class="footer">
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Sakila - PHP / POO</h5>
      <p class="card-text">©2021 ECF-6 Joyce MATHIEU</p>
      <a href="index.php?page=home" class="btn btn-primary">Accueil</a>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>