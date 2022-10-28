<?php 

class Ticket {
    private string $reference;
    private int $price;

    public function __construct($reference, $price)
    {
        $this->setReference($reference);
        $this->setPrice($price);
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

}