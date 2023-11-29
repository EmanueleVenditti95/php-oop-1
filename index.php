<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

//MOVIES
$your_name = new Movie('Your Name', 'japanese', 5, '357.986.087$', 106);
$eragon = new Movie('Eragon', 'english', 2, '249.288.105$', 104);
$perfetti_sconosciuti = new Movie('Perfetti Sconosciuti', 'italian', 4, '31.640.626$', 97);
$mr_nobody = new Movie('Mr. Nobody', 'english', 4, '2.331.721$', 141);
$la_forma_della_voce = new Movie('La forma della voce', 'japanese', 4, '30.156.463$', 130);

//SERIES
$scrubs = new Serie('Scrubs', 'english', 4, 8);
$how_i_met_your_mother = new Serie('Hou I met your mother', 'english', 4, 9);
$big_bag_theory = new Serie('The Big Bang Theory', 'english', 4, 12);
$attack_on_titan = new Serie('Attack on Titan', 'japanese', 5, 4);
$the_boys = new Serie('The Boys', 'english', 4, 3);



$products = [
    $your_name,
    $eragon,
    $perfetti_sconosciuti,
    $mr_nobody,
    $la_forma_della_voce,
    $scrubs,
    $how_i_met_your_mother,
    $big_bag_theory,
    $attack_on_titan,
    $the_boys,
];

foreach ($products as $product) { ?>
    <div class="card">
        <?php $product->displayMovie($product); ?>
    </div>
<?php } ?>

<style>
    .card {
        padding: 20px;
    }
</style>