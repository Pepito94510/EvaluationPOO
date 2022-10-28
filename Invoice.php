<?php

class Invoice {


    public function __construct()
    {
        $this->listPayable = array();
    }

    public function add(Payable $p)
    {
        $this->listPayable[] = $p;
    }

    public function totalAmount()
    {   
        $totalToPay = 0;
        foreach ($this->listPayable as $element) {
            $totalToPay = $totalToPay + $element->cost();
        }
        return $totalToPay / 100;
    }

    public function totalTax()
    {
        $totalTaxToPay = 0;
        foreach ($this->listPayable as $element) {
            $totalTaxToPay = $totalTaxToPay + $element->taxRatePerTenThousand();
        }
        return $totalTaxToPay / 100;
    }
}