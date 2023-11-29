<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$your_name = new Production('Your Name', 'japanese', 5);

$eragon = new Production('Eragon', 'english', 2);

$tre_uomini_e_una_gamba = new Production('Tre uomini e una gamba', 'italian', '4');

$movies = [
    $your_name,
    $eragon,
    $tre_uomini_e_una_gamba
];

foreach ($movies as $movie) { ?>
    <div class="card">
        <?php $movie->displayFilm($movie); ?>
    </div>
<?php } ?>

<style>
    .card {
        padding: 20px;
    }

</style>


