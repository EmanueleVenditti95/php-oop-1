<?php

class Movie extends Production
{
    protected $profit;
    protected $duration;

    function __construct(String $_title, String $_language, Int $_rating, String $_profit, Int $_duration)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }

    public function setProfit($profit)
    {
        $this->profit = $profit;
    }

    public function setduration($duration)
    {
        $this->duration = $duration;
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
                <p><span>Duration : </span><?php echo $this->duration; ?></p>
            </li>
            <li>
                <p><span>Profit : </span><?php echo $this->profit; ?></p>
            </li>
        </ul>
<?php }
}
