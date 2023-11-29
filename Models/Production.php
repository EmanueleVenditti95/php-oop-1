<?php
require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/Serie.php';

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

    public function displayProduction()
    {
?>
        <ul>
            <li>
                <p><span>Title : </span><?php echo $this->title ?></p>
            </li>
            <li>
                <p><span>Language : </span><?php echo $this->language ?></p>
            </li>
            <li>
                <p><span>Rating : </span><?php echo $this->rating ?></p>
            </li>
        </ul>
<?php }
}; ?>