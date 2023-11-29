<?php
require_once __DIR__ . '/Movie.php';

class Production
{
    public $title;
    public $language;
    public $rating;

    function __construct(String $_title, String $_language, Int $_rating)
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

    public function displayMovie($movie)
    {
        echo "Title : $movie->title <br> Language : $movie->language <br> Rating : $movie->rating <br> Duration : $movie->duration min <br> Profit : $movie->profit";
    }
};