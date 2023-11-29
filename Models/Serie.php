<?php

class Serie extends Production
{
   protected $season;

   function __construct(String $_title, String $_language, Int $_rating, Int $_season)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->season = $_season;
    }
}