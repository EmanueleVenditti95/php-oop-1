<?php

class Movie extends Production
{
    protected $profit;
    protected $duration;

    function __construct(String $_title, String $_language, Int $_rating, String $_profit, Int $_duration)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->profit = $_profit;
        $this->duration = $_duration;
    }

    // public function getProfit($profit) {
    //     $this->profit = $profit;
    // }
}
