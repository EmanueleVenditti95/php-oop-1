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

     public function setProfit($profit) {
         $this->profit = $profit;
     }

     public function setduration($duration) {
        $this->duration = $duration;
    }
}
