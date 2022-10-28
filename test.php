<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once("Item.php");
require_once("ShoppingCart.php");
require_once("FreshItem.php");

$item = new Item("corn flakes", 5.00, 0);

var_dump($item->getPrice());
var_dump($item->getName());


function ovar_dump($items)
{
    if($items->getBestBeforeDate())
    {
        print($items->getName() . " : " . $items->getPrice() . " €. À consommer avant : " . $items->getBestBeforeDate());
    } else {
        print($items->getName() . " : " . $items->getPrice() . " €");
    }
}

echo('la');
$item3 = new Item("chewing gum", 4.03, 10);


$panier = new ShoppingCart(2);

$panier->addItem($item3);

$panier->toString();

var_dump($panier);

