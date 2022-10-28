<?php

class Payable {

    public function __construct()
    {
            
    } 

    public function label($product)
    {

        switch (get_class($product)) {
            case 'Item':
                return "Il s'agit d'un article";
                break;

            case 'Ticket':
                return "Il s'agit d'un ticket pour assister à un évènement";
                break;

            case 'FreshItem':
                return "Il s'agit d'un produit frais avec une date limite de consommation";
                break;

            default:
                return "L'item n'est pas connu";
                break;
        }
    }

    public function cost($product)
    {
        $tax = $this->taxRatePerTenThousand($product);
        return $product->getPrice() + $tax;
    }

    public function taxRatePerTenThousand($product)
    {
        switch (get_class($product)) {
            case 'Item':
                return 2500;
                break;

            case 'Ticket':
                return 1000;
                break;

            case 'FreshItem':
                return 1000 - 100*((int) ($product->getWeight() / 1000));
                break;

            default:
                return "L'item n'est pas connu";
                break;
        }
    }

    
}