<?php

require_once("Item.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);
class FreshItem extends Item{

    private string $bestBeforeDate;

    public function __construct($name, $price, $weight, $date)
    {
        parent::__construct($name, $price, $weight);
        $this->bestBeforeDate = date('YYYY-MM-DD', strtotime($date));
    }

    public function setBestBeforeDate($bestBeforeDate)
    {
        $this->bestBeforeDate = $bestBeforeDate;
    }

    public function getBestBeforeDate($bestBeforeDate)
    {
        return $bestBeforeDate;
    }


}