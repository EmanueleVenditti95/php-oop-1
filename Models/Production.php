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

    public function displayFilm($movie)
    {
        echo "Title : $movie->title <br> Language : $movie->language <br> Rating : $movie->rating";
    }
};