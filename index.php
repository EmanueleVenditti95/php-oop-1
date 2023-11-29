<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$your_name = new Movie ('Your Name', 'japanese', 5, '357.986.087$', 106);

$eragon = new Movie ('Eragon', 'english', 2, '249.288.105$' , 104);

$perfetti_sconosciuti = new Movie ('Perfetti Sconosciuti', 'italian', 4, '31.640.626$' , 97);

$mr_nobody = new Movie ('Mr. Nobody', 'english', 4, '2.331.721$', 141);

$la_forma_della_voce = new Movie ('La forma della voce', 'japanese', 4, '30.156.463$', 130);

$movies = [
    $your_name,
    $eragon,
    $perfetti_sconosciuti,
    $mr_nobody,
    $la_forma_della_voce
];

foreach ($movies as $movie) { ?>
    <div class="card">
        <?php $movie->displayMovie($movie); ?>
    </div>
<?php } ?>

<style>
    .card {
        padding: 20px;
    }

</style>


