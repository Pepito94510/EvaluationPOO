<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Item {
    private string $name;
    private float $price;
    private int $weight;

    public function __construct($name, $price, $weight)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setWeight($weight);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}