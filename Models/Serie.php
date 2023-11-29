<?php

class Serie extends Production
{
   protected $season;

   function __construct(String $_title, String $_language, Int $_rating, Int $_season)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->setSeason($_season);
    }

    public function setSeason($season) {
        $this->season = $season;
    }

    public function displayProduction()
    { ?>
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
            <li>
                <p><span>Season : </span><?php echo $this->season; ?></p>
            </li>
        </ul>
<?php }
}