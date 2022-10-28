<?php


error_reporting(E_ALL);
ini_set("display_errors", 1);
class FreshItem extends Item{

    private string $bestBeforeDate;

    public function setBestBeforeDate($bestBeforeDate)
    {
        $bestBeforeDate = $this->bestBeforeDate;
    }

    public function getBestBeforeDate($bestBeforeDate)
    {
        return $bestBeforeDate;
    }
}