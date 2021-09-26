<?php
require './app/autoloader.php';
require './helper/db.php';

Autoloader::register();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

ob_start();

if ($page === 'home') {
    require './view/home.php';
} elseif ($page === 'actor') {
    require './view/actor.php';
} elseif ($page === 'category') {
    require './view/category.php';
} elseif ($page === 'movie') {
    require './view/movie/movie.php';
} elseif ($page === 'moviesByCat') {
    require './view/movie/moviesByCat.php';
} elseif ($page === 'moviesByActor') {
    require './view/movie/moviesByActor.php';
} elseif ($page === 'searchMovie') {
    require './view/movie/searchMovie.php';
} elseif ($page === 'customer') {
    require './view/customer.php';
}

$content = ob_get_clean();
require './view/layout/layout.php';
