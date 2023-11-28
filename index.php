<?php
class Production
{
    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
    }

    function setRating($rating)
    {
        if (is_numeric($rating) && $rating >= 0) {
            $this->rating = intval($rating);
        }
    }
};

function displayFilm($movie)
{
    echo 'Title :' . $movie->title . '<br>' . 'Language :' . $movie->language . '<br>' . 'Rating :' . $movie->rating;
}

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
        <?php displayFilm($movie); ?>
    </div>
<?php } ?>

<style>
    .card {
        padding: 20px;
    }

</style>


