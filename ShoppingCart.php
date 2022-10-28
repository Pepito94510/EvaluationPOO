<?php 


error_reporting(E_ALL);
ini_set("display_errors", 1);

class ShoppingCart{

    private int $id;
    private $panier = array();

    public function __construct()
    {
        $this->setId();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId()
    {
        $id = uniqid();
    }

    public function addItem($item){
        if(empty($this->panier) && $item->getWeight() < 10000)
        {
            $this->panier[] = $item;
        } else {
            if(($this->checkWeight() + $item->getWeight() < 10000))
            {
                $this->panier[] = $item;
            }
        } 

    }


    public function removeItem($item)
    {
        if(!in_array($item,$this->panier))
        {
            print("Ce produit n'est pas dans votre panier<br>");
        }
        else {
            if (($key = array_search($item, $this->panier)) !== false) {
                unset($this->panier[$key]);
            }
        }
    }

    public function itemCount()
    {
        return (count($this->panier));
    } 

    // Complexité 2 sur 5
    public function totalPrice()
    {
        // J'initialise le prix total du panier
        $totalPrice = 0;

        // Pour chaque élement dans le panier ...
        foreach ($this->panier as $element) {
            // Je stock le prix de l'element dans le total du panier. 
            $totalPrice = $totalPrice + $element->getPrice();
        }
        // Je retourne le prix total du panier
        return $totalPrice;
    }

    public function checkWeight() {
        $totalWeight = 0;
        foreach($this->panier as $element) {
            $totalWeight = $totalWeight + $element->getWeight();
        }
        return $totalWeight;
    }

    public function toString()
    {
        $result = array();
        $result['id'] = $this->getId();
        $result['quantité'] = $this->itemCount();
        
        print("Votre panier n°" . $result['id'] . " contient " . $result['quantité'] . ". Vos produits sont : <br>");
        foreach ($this->panier as $element) {
            print($element->getName() . " " . $element->getPrice() . " €");
        }
    }
}